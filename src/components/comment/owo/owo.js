/**
 * UPDATES AND DOCS AT: https://github.com/wangyang0210
 * https://www.cnblogs.com/wangyang0210/
 * @author: https://github.com/DIYgod/OwO
 * @Date 2023-02-18 11:37
 * ----------------------------------------------
 * @describe: owo.js
 */

;(() => {
    class OwO {
        constructor(options) {
            const defaultOption = {
                container: $('.OwO')[0],
                target: $('textarea')[0],
                position: 'down',
                width: '100%',
                maxHeight: '250px',
                data: $.__config.articleContent.owo.options,
            }
            for (let defaultKey in defaultOption) {
                if (defaultOption.hasOwnProperty(defaultKey) && !options.hasOwnProperty(defaultKey)) options[defaultKey] = defaultOption[defaultKey]
            }
            this.container = options.container
            this.target = options.target
            if (options.position === 'up') this.container.classList.add('OwO-up')
            this.init(options)
        }

        init(options) {
            this.area = options.target
            this.packages = Object.keys(options.data)

            // fill in HTML
            let html = `
            <div class="OwO-logo">
                    <span>
                        <svg t="1677417166412" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="3850" width="200" height="200">
                            <path d="M933.87 505.928c10.165-233.804-172.811-426.945-406.615-437.111-81.323-5.082-162.646 20.331-233.804 60.993-15.248 10.165-20.331 25.413-10.165 40.662 5.082 10.165 25.413 15.248 35.578 10.165 66.074-40.662 137.232-60.993 208.389-55.909 203.308 5.082 360.87 177.893 350.705 381.201-5.082 203.308-177.893 360.87-381.201 350.705-198.224-5.083-360.87-177.893-350.705-381.201 0-71.158 25.413-142.315 71.158-198.224 5.082-15.248 5.082-30.496-10.165-40.662-10.165-10.165-25.413-5.082-35.578 5.083-50.827 71.158-76.239 147.397-81.323 233.804-10.165 233.804 172.811 426.945 406.615 437.111 233.804 10.165 426.945-172.811 437.111-406.614zM303.617 536.423c-15.248 5.082-20.331 20.331-15.248 35.578 35.578 96.571 127.067 157.564 228.72 157.564 101.653 0 193.142-60.993 223.639-157.563 5.082-15.247 0-30.496-15.248-35.578-15.248-5.082-30.496 5.082-35.578 15.247-25.413 76.239-96.571 127.067-172.811 127.067-81.323 0-152.481-50.828-177.893-127.067-5.082-10.165-20.331-20.331-35.578-15.247zM694.984 363.611c0-30.496-25.413-55.909-55.909-55.909s-50.828 25.413-50.828 55.909c0 30.496 20.331 50.828 50.828 50.828 30.496 0 55.909-20.331 55.909-50.828zM390.023 414.439c30.496 0 50.828-20.331 50.828-50.828s-20.331-55.909-50.828-55.909c-30.496 0-55.909 25.413-55.909 55.909 0 30.496 25.413 50.828 55.909 50.828z" p-id="3851"></path>
                         </svg>
                  </span>
                </div>
            <div class="OwO-body" style="width: ${options.width}">`

            for (let i = 0; i < this.packages.length; i++) {
                html += `<ul class="OwO-items OwO-items-${options.data[this.packages[i]].type}" style="max-height: ${
                    parseInt(options.maxHeight) - 53 + 'px'
                };">`
                let opackage = options.data[this.packages[i]].container
                for (let i = 0; i < opackage.length; i++) {
                    html += `<li class="OwO-item" title="${opackage[i].text}">${opackage[i].icon}</li>`
                }
                html += `</ul>`
            }

            html += `
                <div class="OwO-bar">
                    <ul class="OwO-packages">`
            for (let i = 0; i < this.packages.length; i++) {
                html += `<li><span>${this.packages[i]}</span></li>`
            }
            html += `
                    </ul>
                </div>
            </div>
            `
            this.container.innerHTML = html

            // bind event
            this.logo = this.container.getElementsByClassName('OwO-logo')[0]
            this.logo.addEventListener('click', () => { this.toggle() })

            this.container.getElementsByClassName('OwO-body')[0].addEventListener('click', e => {
                let target = null
                if (e.target.classList.contains('OwO-item')) {
                    target = e.target
                } else if (e.target.parentNode.classList.contains('OwO-item')) {
                    target = e.target.parentNode
                }
                if (target) {
                    const cursorPos = this.area.selectionEnd
                    let areaValue = this.area.value
                    this.area.value = areaValue.slice(0, cursorPos) + target.innerHTML + areaValue.slice(cursorPos)
                    this.area.focus()
                    this.toggle()
                }
            })

            this.packagesEle = this.container.getElementsByClassName('OwO-packages')[0]
            for (let i = 0; i < this.packagesEle.children.length; i++) {
                ;(index => {
                    this.packagesEle.children[i].addEventListener('click', () => { this.tab(index) })
                })(i)
            }
            this.tab(0)
        }

        toggle() {
            if (this.container.classList.contains('OwO-open')) {
                this.container.classList.remove('OwO-open')
            } else {
                this.container.classList.add('OwO-open')
            }
        }

        tab(index) {
            const itemsShow = this.container.getElementsByClassName('OwO-items-show')[0]
            if (itemsShow) itemsShow.classList.remove('OwO-items-show')
            this.container.getElementsByClassName('OwO-items')[index].classList.add('OwO-items-show')

            const packageActive = this.container.getElementsByClassName('OwO-package-active')[0]
            if (packageActive) packageActive.classList.remove('OwO-package-active')
            this.packagesEle.getElementsByTagName('li')[index].classList.add('OwO-package-active')
        }
    }
    if (typeof module !== 'undefined' && typeof module.exports !== 'undefined') {
        module.exports = OwO
    } else {
        window.OwO = OwO
    }
})()
