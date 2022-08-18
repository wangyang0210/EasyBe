<div id="comment_form" class="commentform">
    <div id="divCommentShow"></div>
    <div id="comment_nav"><span id="span_refresh_tips"></span>
        <a href="javascript:void(0);"  id="lnk_RefreshComments" runat="server" clientidmode="Static">刷新评论</a>
        <a href="#" nclick="return RefreshPage();">刷新页面</a>
        <a href="#top">返回顶部</a></div>
    <div id="comment_form_container" style="visibility: visible;">
        <script type="text/javascript" src="https://mention.cnblogs.com/bundles/mention.min.js"></script>
        <div id="commentform_title">发表评论</div>
        <span id="tip_comment" style="color:Red"></span>
        <div class="commentbox_main comment_textarea">
            <textarea id="tbCommentBody" placeholder="你猜猜,我的口袋里面有啥子"></textarea>
            <div id="tbCommentBodyPreview" class="feedbackCon" style="display: none">
                <div id="tbCommentBodyPreviewBody" class="blog_comment_body comment_preview cnblogs-markdown"></div>
            </div>
        </div>
        <p id="commentbox_opt">
            <input id="btn_comment_submit" type="button" class="comment_btn" title="提交评论(Ctrl + Enter)" value="提交评论">
            <span id="span_comment_canceledit" style="display:none">
                <a href="javascript:void(0);" onclick="return CancelCommentEdit()">不改了</a>
            </span>
            <a href="javascript:void(0);" onclick="return account.logout();">退出</a>
        </p>
        <div id="tip_comment2" style="color:Red"></div>
    </div>
</div>


<div id="blog-comments-placeholder">

    <div id="comment_pager_top">

    </div>
    <br>
    <div class="feedback_area_title">评论列表</div>
    <div class="feedbackNoItems">
        <div class="feedbackNoItems"></div>
    </div>
    <div class="feedbackItem">
        <div class="feedbackListSubtitle">
            <div class="feedbackManage">
                <span class="comment_actions">
                    <a href="javascript:void(0);">
                        回复
                    </a>
                    <a href="javascript:void(0);">
                        引用
                    </a>
                </span>
            </div>
            <a href="#5092113" class="layer">#1楼</a>
            <a name="5092113" id="comment_anchor_5092113"></a>
            [<span class="louzhu">楼主</span>]
            <span class="comment_date">2022-08-18 22:40</span>

            <a id="a_comment_author_5092113" href="https://www.cnblogs.com/wangyang1225/"
               target="_blank">WangYang1225</a>
        </div>
        <div class="feedbackCon">
            <div id="comment_body_5092113" data-format-type="Markdown" class="blog_comment_body cnblogs-markdown">
                <p>哈哈哈哈</p>
            </div>
            <div class="comment_vote">
                <span class="comment_error" style="color: red"></span>
            </div>
            <span id="comment_5092113_avatar" style="display:none">
            https://cdn.jsdelivr.net/gh/wangyang0210/pic/avatar-img/avatar-1.jpg
        </span>
        </div>
    </div>
    <div class="feedbackItem">
        <div class="feedbackListSubtitle">
            <div class="feedbackManage">
                <span class="comment_actions">
                    <a href="javascript:void(0);" >
                        回复
                    </a>
                    <a href="javascript:void(0);" >
                        引用
                    </a>
                </span>
            </div>
            <a href="#5092114" class="layer">#2楼</a>
            <a name="5092114" id="comment_anchor_5092114"></a>
            [<span class="louzhu">楼主</span>]
            <span class="comment_date">2022-08-18 22:40</span>
            <a id="a_comment_author_5092114" href="https://www.cnblogs.com/wangyang1225/"
               target="_blank">WangYang1225</a>
        </div>
        <div class="feedbackCon">
            <div id="comment_body_5092114" data-format-type="Markdown" class="blog_comment_body cnblogs-markdown">
                <p>你说什么</p>
            </div>
            <div class="comment_vote">
                <span class="comment_error" style="color: red"></span>
            </div>
            <span id="comment_5092114_avatar" style="display:none">
                https://cdn.jsdelivr.net/gh/wangyang0210/pic/avatar-img/avatar-1.jpg
            </span>
        </div>
    </div>
    <div class="feedbackItem">
        <div class="feedbackListSubtitle">
            <div class="feedbackManage">
                <span class="comment_actions">
                    <a href="javascript:void(0);" onclick="return GetCommentBody(5092116)">
                        修改
                    </a>
                    <a href="javascript:void(0);" onclick="return DelComment(5092116, this,'16533332')">
                        删除
                    </a>
                </span>
            </div>
            <a href="#5092116" class="layer">#3楼</a>
            <a name="5092116" id="comment_anchor_5092116"></a>
            <span id="comment-maxId" style="display: none">5092116</span>
            <span id="comment-maxDate" style="display: none">2022/8/18 下午10:48:42</span>
            <span class="comment_date">2022-08-18 22:48</span>
            <a id="a_comment_author_5092116" href="https://www.cnblogs.com/wangyang0210/" target="_blank">。思索</a>

        </div>
        <div class="feedbackCon">

            <div id="comment_body_5092116" data-format-type="Markdown" class="blog_comment_body cnblogs-markdown">
                <p><a href="#5092113" title="查看所回复的评论" onclick="commentManager.renderComments(0,50,5092113);">@</a>WangYang1225<br>
                    哈哈哈哈</p>
            </div>
            <div class="comment_vote">
                <span class="comment_error" style="color: red"></span>
            </div>
            <span id="comment_5092116_avatar" style="display:none">
           https://cdn.jsdelivr.net/gh/wangyang0210/pic/avatar-img/avatar-2.jpg
        </span>

        </div>
    </div>
    <div id="comment_pager_bottom">
    </div>
</div>
