type EMethods = 'GET' | 'POST' | 'PUT' | 'DELETE' | 'PATCH'

type EMode = 'cors' | 'no-cors' | 'same-origin'

type ECache = 'default' | 'no-store' | 'reload' | 'no-cache' | 'force-cache' | 'only-if-cached'

type ERedirect = 'follow' | 'error' | 'manual'

type EReferrer = 'no-referrer' | 'client'

type EReferrerPolicy =
  | 'no-referrer'
  | 'no-referrer-when-downgrade'
  | 'origin'
  | 'origin-when-cross-origin'
  | 'unsafe-url'

type ECredentials = 'omit' | 'same-origin' | 'include'

interface EHeadConfig {
  Accept?: string
  'Content-Type': string
  [propName: string]: any
}

export interface EResponseData {
  code: number
  data: any
  message: string
}

interface EAnyMap {
  [propName: string]: any
}

export interface ERequestOptions {
  headers?: EHeadConfig
  signal?: AbortSignal
  method?: EMethods
  query?: EAnyMap
  params?: EAnyMap
  data?: EAnyMap
  body?: string
  timeout?: number
  credentials?: ECredentials
  mode?: EMode
  cache?: ECache
  redirect?: ERedirect
  referrer?: EReferrer
  referrerPolicy?: EReferrerPolicy
}

export interface ERequestInterface {
  request<T>(url: string, options?: ERequestOptions): Promise<T>
}

type ECustomRequestError = {
  status: number
  statusText: string
  url: string
}
