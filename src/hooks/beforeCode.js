/**
 * UPDATES AND DOCS AT: https://github.com/wangyang0210
 * https://www.cnblogs.com/wangyang0210/
 * @author: WangYang, i@oyo.cool
 * @Date 2022-08-25 15:25
 * ----------------------------------------------
 * @describe: code 渲染开始前
 */

export default function main() {
    if (typeof $.__config.hooks.beforeCode === 'function') $.__config.hooks.beforeCode();
}
