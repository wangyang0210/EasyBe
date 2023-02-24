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
                logo: 'OwO表情',
                container: document.getElementsByClassName('OwO')[0],
                target: document.getElementsByTagName('textarea')[0],
                position: 'down',
                width: '100%',
                maxHeight: '250px',
                data: $.__config.articleContent.owo.options,
            }
            for (let defaultKey in defaultOption) {
                if (defaultOption.hasOwnProperty(defaultKey) && !options.hasOwnProperty(defaultKey))
                    options[defaultKey] = defaultOption[defaultKey]
            }
            this.container = options.container
            this.target = options.target
            if (options.position === 'up') this.container.classList.add('OwO-up')
            this.init(options)
        }

        init(options) {
            console.log()
            this.area = options.target
            this.packages = Object.keys(options.data)

            // fill in HTML
            let html = `
            <div class="OwO-logo"><span>${options.logo}</span></div>
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
            this.logo.addEventListener('click', () => {
                this.toggle()
            })

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
                    this.packagesEle.children[i].addEventListener('click', () => {
                        this.tab(index)
                    })
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
