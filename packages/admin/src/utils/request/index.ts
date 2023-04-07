import qs from 'qs'
import NProgress from '../progress'
import type { ERequestOptions, ERequestInterface, ECustomRequestError } from './types.d'
import { isPlainObject } from '../util'
import { ElNotification } from 'element-plus'

function handleRequestError(err: Error & ECustomRequestError, abortController?: AbortController) {
  switch (err.status) {
    case 408: {
      abortController && abortController.abort()
      ElNotification({
        title: 'Error',
        message: err.statusText,
        type: 'error'
      })
      break
    }
    default: {
      console.error(err)
      break
    }
  }
}

class Request implements ERequestInterface {
  public async request<T>(url: string, options?: ERequestOptions, abortController?: AbortController): Promise<T> {
    NProgress.start()
    const opts: ERequestOptions = Object.assign(
      {
        method: 'GET',
        headers: {
          'Content-Type': 'application/x-www-form-urlencoded',
          Accept: 'application/json'
        },
        credentials: 'include',
        timeout: 10000,
        mode: 'cors',
        cache: 'no-cache'
      },
      options
    )

    abortController && (opts.signal = abortController.signal)

    if (opts?.query && isPlainObject(opts.query)) {
      url += `${url.includes('?') ? '&' : '?'}${qs.stringify(opts.query)}`
    }

    if (opts?.data && isPlainObject(opts.data)) {
      opts.body = JSON.stringify(opts.data)
      opts.headers && Reflect.set(opts.headers, 'Content-Type', 'application/json')
    }

    console.log('Request opts: ', opts)

    try {
      const res = await Promise.race([
        fetch(url, opts),
        new Promise<any>((_, reject) => {
          setTimeout(() => {
            return reject({ status: 408, statusText: '请求超时，请稍后重试', url })
          }, opts.timeout)
        })
      ])
      const result: T = await res.json()
      NProgress.done()
      return result
    } catch (e: any) {
      handleRequestError(e, abortController)
      NProgress.done()
      return e
    }
  }
}

const { request } = new Request()

export { request as default }
