

<div id="page-content">
    <div id="login-info" style="display: none">
        <div data-role="login-info-username" data-value="guest"></div>
        <div data-role="login-info-nickname" data-value="未名湖里的鱼儿"></div>
        <div data-role="login-info-rankname" data-value="高级站友"></div>
        <div data-role="login-info-numposts" data-value="1552"></div>
    </div>
    <!-- this is the real content, should be returned from server when PJAX working.-->
    <!-- start main -->
    <div id="bdwm-title">天府之国(SiChuan)版 - BBS</div>
    <script>
        $("#link-buttons > a").removeClass("cur");
    </script>
    <div id="page-thread" class="page-thread">

        <!-- start _board-head.php-->
        <!-- start board-head -->
        <div class="breadcrumb-trail">
            <!--这里是面包屑导航，样式在global里面-->
            <a href="home.php">首页</a>
            <a href="zone.php">版面目录</a>
            <a href="board.php?bid=671">二区: 乡情校谊</a>
            <a href="/v2/thread.php?bid=464">天府之国(SiChuan)</a>
        </div>

        <div id="board-head" data-bid="464">
            <div id="title-wrapper">
                <div id="title" class="gray limit">
                    <span class="title-text eng">SiChuan</span>
                    <span class="title-text black">天府之国</span>
                </div>
                <div id="stat" class="gray l">
                    在线：<span class="num">1</span>
                    今日：<span class="num">0</span>
                    主题：<span class="num">2367</span>
                    帖数：<span class="num">8282</span>
                </div>
            </div>
            <div id="add-fav" class="gray">
                <a id="bid" class="star" data-action="make-favorite" data-bid="464"></a>
                <span id="fav-text" class="fav-text" data-action="make-favorite">收藏本版</span> (<span class="num">315</span>)
                <a data-no-pjax target="_blank" class="rss" href="rss.php?bid=464"></a>
            </div>
            <div id="content" class="gray">
                <div id="intro" class="limit">川菜香喷喷～川妹子美呆呆~</div>
                <div id="admin" class="limit">版务:
                    <a href="user.php?uid=14045">askyer</a>
                </div>
            </div>

            <div id="tab">
                <div class="tab-button" id="tab-button-thread"><a href="thread.php?bid=464" class="gray link">帖子</a></div>
                <div class="tab-button" id="tab-button-collection"><a href="collection.php?path=groups/GROUP_2/SiChuan" class="gray link">精华区</a></div>
                <div class="tab-button" id="tab-button-note"><a href="note.php?bid=464" class="gray link">备忘录</a></div>
            </div>

            <div class="search-box">
            </div>

            <div id="favorite-modal" class="modal bdwm-dialog" style="display: none;">
                <div class="text">
                    <span>您已成功将</span>
                    <span class="board-name"><span id="board-name">天府之国</span>(<span board-name-en>SiChuan</span>)</span>
                    <span><br/>添加至版面收藏夹</span>
                </div>
                <a data-action="dialog-dismiss" class="button">确认</a>
            </div>

        </div>
        <!-- end board-head -->



        <!-- end _board-head.php-->

        <!-- start board-body -->
        <script>
            $("#tab-button-thread").addClass("active");
        </script>
        <div id="board-body">
            <div id="list-head" class="fw">
                <div id="list-filter" class="l" data-type="1">
                    <div class="l filter-item filter-item-active"><a class="link" href="?bid=464"></a>全部</div>
                    <div class="l filter-item"><a class="link" href="?bid=464&amp;type=3"></a>保留</div>
                    <div class="l filter-item"><a class="link" href="?bid=464&amp;type=2"></a>文摘</div>
                    <div class="l filter-item hidden"><a class="link" href="?bid=464&amp;type=10"></a>附件</div>
                    <div id="more-button" class="l more active">更多  &#9658</div>
                </div>
                <div id="list-option" class="r">
                    <div class="l option-button">
                        <a id="change-list-mode" href="?bid=464" data-mode="topic" class="link"></a>
                        <div class="change"></div>
                        <div>切换到单帖模式</div>
                    </div>
                    <div class="l option-button">
                        <a id="clear-all-unread" class="link"></a>
                        <div class="l delete"></div>
                        <div class="l">清除未读</div>
                    </div>
                </div>
            </div>
            <div id="list-body" class="fw">
                <div id="list-title" class="fw list-title">
                    <div class="l id">序号</div>
                    <div class="l title">标题</div>
                    <div class="l author">作者</div>
                    <div class="l reply">回复</div>
                    <div class="l time">最后发表</div>
                </div>
                <div id="list-content" class="fw">
                    <!-- list pin -->
                    <div class="list-item" data-itemid="12340290"><a class="link" href="post-read-single.php?bid=464&amp;type=0&amp;postid=12340290"></a>
                        <div class="id l"><div class="pin">置顶</div></div>
                        <div class="dot l" data-role="unread-dot"></div>
                        <div class="title-cont l">
                            <div class="title l limit" style="max-width: 437px;">四川校友会愿助赴川求职的同学一臂之力</div>
                            <img src="images/topics/attach.png">
                            <img src="images/topics/bl.png">
                        </div>
                        <div class="avatar l"><a class="link"></a>
                            <img src="images/cat.jpg">
                        </div>
                        <div class="author l"><a class="link"></a>
                            <div class="name limit">pkusc</div>
                            <div class="time">2013-01-09</div>
                        </div>
                    </div>
                    <!-- list pin -->
                    <div class="list-item" data-itemid="15191289"><a class="link" href="post-read-single.php?bid=464&amp;type=0&amp;postid=15191289"></a>
                        <div class="id l"><div class="pin">置顶</div></div>
                        <div class="dot l" data-role="unread-dot"></div>
                        <div class="title-cont l">
                            <div class="title l limit" style="max-width: 480px;">【天府官方微信群】</div>
                            <img src="images/topics/attach.png">
                        </div>
                        <div class="avatar l"><a class="link" href="user.php?uid=1956"></a>
                            <img src="/attach/avatar/L/lmqmantou.jpg?t=1471252881">
                        </div>
                        <div class="author l"><a class="link" href="user.php?uid=1956"></a>
                            <div class="name limit">lmqmantou</div>
                            <div class="time">2016-04-12</div>
                        </div>
                    </div>
                    <!-- list pin -->
                    <div class="list-item" data-itemid="16664457"><a class="link" href="post-read-single.php?bid=464&amp;type=0&amp;postid=16664457"></a>
                        <div class="id l"><div class="pin">置顶</div></div>
                        <div class="dot l" data-role="unread-dot"></div>
                        <div class="title-cont l">
                            <div class="title l limit" style="max-width: 479px;">欢迎大家来四川版报到</div>
                            <img src="images/topics/lock.png">
                        </div>
                        <div class="avatar l"><a class="link" href="user.php?uid=17149"></a>
                            <img src="/attach/avatar/M/mayyao.jpg?t=1491962979">
                        </div>
                        <div class="author l"><a class="link" href="user.php?uid=17149"></a>
                            <div class="name limit">mayyao</div>
                            <div class="time">06-28 07:32</div>
                        </div>
                    </div>
                    <!-- list pin -->
                    <div class="list-item" data-itemid="17106601"><a class="link" href="post-read-single.php?bid=464&amp;type=0&amp;postid=17106601"></a>
                        <div class="id l"><div class="pin">置顶</div></div>
                        <div class="dot l" data-role="unread-dot"></div>
                        <div class="title-cont l">
                            <div class="title l limit" style="max-width: 499px;">【版聚通知】11月4日中午重八牛府</div>
                        </div>
                        <div class="avatar l"><a class="link" href="user.php?uid=14045"></a>
                            <img src="/attach/avatar/A/askyer.jpg?t=1471185493">
                        </div>
                        <div class="author l"><a class="link" href="user.php?uid=14045"></a>
                            <div class="name limit">askyer</div>
                            <div class="time">11-02 11:04</div>
                        </div>
                    </div>
                    <!-- list item -->
                    <div class="list-item-topic list-item" data-itemid="16282768"><a class="link" href="post-read.php?bid=464&amp;threadid=16282768"></a>
                        <div class="id l">8253</div>
                        <div class="dot l" data-role="unread-dot"></div>
                        <div class="title-cont l">
                            <div class="title l limit" style="max-width: 480px;">现在的年轻人都不说吴语了(转载)</div>
                            <img src="images/topics/attach.png">
                        </div>
                        <div class="avatar l"><a class="link" href="user.php?uid=31798"></a>
                            <img src="images/user/portrait-mas.png">
                        </div>
                        <div class="author l"><a class="link" href="user.php?uid=31798"></a>
                            <div class="name limit">lldsolitude</div>
                            <div class="time">12-04 22:42</div>
                        </div>
                        <div class="reply-num l">29</div>
                        <div class="author l"><a class="link" href="post-read.php?bid=464&amp;threadid=16282768&amp;page=a&amp;postid=17217638#17217638"></a>
                            <div class="name limit">Auspicious</div>
                            <div class="time">12-05 22:49</div>
                        </div>
                    </div>
                    <!-- list item -->
                    <div class="list-item-topic list-item" data-itemid="16273731"><a class="link" href="post-read.php?bid=464&amp;threadid=16273731"></a>
                        <div class="id l">8200</div>
                        <div class="dot l" data-role="unread-dot"></div>
                        <div class="title-cont l">
                            <div class="title l limit" style="max-width: 499px;">西成天路通车啦</div>
                        </div>
                        <div class="avatar l"><a class="link" href="user.php?uid=47759"></a>
                            <img src="images/user/portrait-mas.png">
                        </div>
                        <div class="author l"><a class="link" href="user.php?uid=47759"></a>
                            <div class="name limit">NeverDavid</div>
                            <div class="time">11-23 00:10</div>
                        </div>
                        <div class="reply-num l">52</div>
                        <div class="author l"><a class="link" href="post-read.php?bid=464&amp;threadid=16273731&amp;page=a&amp;postid=17201139#17201139"></a>
                            <div class="name limit">deli</div>
                            <div class="time">12-01 01:03</div>
                        </div>
                    </div>
                    <!-- list item -->
                    <div class="list-item-topic list-item" data-itemid="16268700"><a class="link" href="post-read.php?bid=464&amp;threadid=16268700"></a>
                        <div class="id l">8195</div>
                        <div class="dot l" data-role="unread-dot"></div>
                        <div class="title-cont l">
                            <div class="title l limit" style="max-width: 499px;">没有微信群什么的吗？</div>
                        </div>
                        <div class="avatar l"><a class="link" href="user.php?uid=46403"></a>
                            <img src="/attach/avatar/L/Lijiawei.jpg?t=1505366311">
                        </div>
                        <div class="author l"><a class="link" href="user.php?uid=46403"></a>
                            <div class="name limit">Lijiawei</div>
                            <div class="time">11-16 14:28</div>
                        </div>
                        <div class="reply-num l">4</div>
                        <div class="author l"><a class="link" href="post-read.php?bid=464&amp;threadid=16268700&amp;page=a&amp;postid=17160513#17160513"></a>
                            <div class="name limit">NeverDavid</div>
                            <div class="time">11-18 11:09</div>
                        </div>
                    </div>
                    <!-- list item -->
                    <div class="list-item-topic list-item" data-itemid="16256800"><a class="link" href="post-read.php?bid=464&amp;threadid=16256800"></a>
                        <div class="id l">8161</div>
                        <div class="dot l" data-role="unread-dot"></div>
                        <div class="title-cont l">
                            <div class="title l limit" style="max-width: 456px;">【版聚通知】11月4日中午重八牛府</div>
                            <img src="images/topics/zd.png">
                        </div>
                        <div class="avatar l"><a class="link" href="user.php?uid=14045"></a>
                            <img src="/attach/avatar/A/askyer.jpg?t=1471185493">
                        </div>
                        <div class="author l"><a class="link" href="user.php?uid=14045"></a>
                            <div class="name limit">askyer</div>
                            <div class="time">11-02 11:04</div>
                        </div>
                        <div class="reply-num l">7</div>
                        <div class="author l"><a class="link" href="post-read.php?bid=464&amp;threadid=16256800&amp;page=a&amp;postid=17131961#17131961"></a>
                            <div class="name limit">lyj</div>
                            <div class="time">11-10 12:23</div>
                        </div>
                    </div>
                    <!-- list item -->
                    <div class="list-item-topic list-item" data-itemid="16258560"><a class="link" href="post-read.php?bid=464&amp;threadid=16258560"></a>
                        <div class="id l">8168</div>
                        <div class="dot l" data-role="unread-dot"></div>
                        <div class="title-cont l">
                            <div class="title l limit" style="max-width: 499px;">版聚总结</div>
                        </div>
                        <div class="avatar l"><a class="link" href="user.php?uid=10349"></a>
                            <img src="/attach/avatar/D/deli.jpg?t=1511844813">
                        </div>
                        <div class="author l"><a class="link" href="user.php?uid=10349"></a>
                            <div class="name limit">deli</div>
                            <div class="time">11-04 14:29</div>
                        </div>
                        <div class="reply-num l">20</div>
                        <div class="author l"><a class="link" href="post-read.php?bid=464&amp;threadid=16258560&amp;page=a&amp;postid=17125597#17125597"></a>
                            <div class="name limit">askyer</div>
                            <div class="time">11-08 10:53</div>
                        </div>
                    </div>
                    <!-- list item -->
                    <div class="list-item-topic list-item" data-itemid="16259117"><a class="link" href="post-read.php?bid=464&amp;threadid=16259117"></a>
                        <div class="id l">8172</div>
                        <div class="dot l" data-role="unread-dot"></div>
                        <div class="title-cont l">
                            <div class="title l limit" style="max-width: 499px;">版聚总结（正式版）</div>
                        </div>
                        <div class="avatar l"><a class="link" href="user.php?uid=32465"></a>
                            <img src="/attach/avatar/F/freejoy.jpg?t=1469147439">
                        </div>
                        <div class="author l"><a class="link" href="user.php?uid=32465"></a>
                            <div class="name limit">freejoy</div>
                            <div class="time">11-05 09:51</div>
                        </div>
                        <div class="reply-num l">3</div>
                        <div class="author l"><a class="link" href="post-read.php?bid=464&amp;threadid=16259117&amp;page=a&amp;postid=17121734#17121734"></a>
                            <div class="name limit">Smart</div>
                            <div class="time">11-07 00:20</div>
                        </div>
                    </div>
                    <!-- list item -->
                    <div class="list-item-topic list-item" data-itemid="16252921"><a class="link" href="post-read.php?bid=464&amp;threadid=16252921"></a>
                        <div class="id l">8088</div>
                        <div class="dot l" data-role="unread-dot"></div>
                        <div class="title-cont l">
                            <div class="title l limit" style="max-width: 499px;">【报名】SiChuan&nbsp;&amp;&nbsp;ChongQing版联合版聚</div>
                        </div>
                        <div class="avatar l"><a class="link" href="user.php?uid=14045"></a>
                            <img src="/attach/avatar/A/askyer.jpg?t=1471185493">
                        </div>
                        <div class="author l"><a class="link" href="user.php?uid=14045"></a>
                            <div class="name limit">askyer</div>
                            <div class="time">10-28 14:18</div>
                        </div>
                        <div class="reply-num l">37</div>
                        <div class="author l"><a class="link" href="post-read.php?bid=464&amp;threadid=16252921&amp;page=a&amp;postid=17112201#17112201"></a>
                            <div class="name limit">tomandmark</div>
                            <div class="time">11-04 00:56</div>
                        </div>
                    </div>
                    <!-- list item -->
                    <div class="list-item-topic list-item" data-itemid="16254333"><a class="link" href="post-read.php?bid=464&amp;threadid=16254333"></a>
                        <div class="id l">8103</div>
                        <div class="dot l" data-role="unread-dot"></div>
                        <div class="title-cont l">
                            <div class="title l limit" style="max-width: 456px;">【报到】IceCodeLiu前来报到</div>
                            <img src="images/topics/wz.png">
                        </div>
                        <div class="avatar l"><a class="link" href="user.php?uid=33104"></a>
                            <img src="/attach/avatar/I/icecodeliu.jpg?t=1505873829">
                        </div>
                        <div class="author l"><a class="link" href="user.php?uid=33104"></a>
                            <div class="name limit">icecodeliu</div>
                            <div class="time">10-30 13:32</div>
                        </div>
                        <div class="reply-num l">35</div>
                        <div class="author l"><a class="link" href="post-read.php?bid=464&amp;threadid=16254333&amp;page=a&amp;postid=17105423#17105423"></a>
                            <div class="name limit">icecodeliu</div>
                            <div class="time">11-01 22:24</div>
                        </div>
                    </div>
                    <!-- list item -->
                    <div class="list-item-topic list-item" data-itemid="16250505"><a class="link" href="post-read.php?bid=464&amp;threadid=16250505"></a>
                        <div class="id l">8062</div>
                        <div class="dot l" data-role="unread-dot"></div>
                        <div class="title-cont l">
                            <div class="title l limit" style="max-width: 499px;">SiChuan版&amp;ChongQing版联合版聚预告</div>
                        </div>
                        <div class="avatar l"><a class="link" href="user.php?uid=14045"></a>
                            <img src="/attach/avatar/A/askyer.jpg?t=1471185493">
                        </div>
                        <div class="author l"><a class="link" href="user.php?uid=14045"></a>
                            <div class="name limit">askyer</div>
                            <div class="time">10-24 21:38</div>
                        </div>
                        <div class="reply-num l">23</div>
                        <div class="author l"><a class="link" href="post-read.php?bid=464&amp;threadid=16250505&amp;page=a&amp;postid=17088210#17088210"></a>
                            <div class="name limit">lyj</div>
                            <div class="time">10-27 00:14</div>
                        </div>
                    </div>
                    <!-- list item -->
                    <div class="list-item-topic list-item" data-itemid="16250965"><a class="link" href="post-read.php?bid=464&amp;threadid=16250965"></a>
                        <div class="id l">8070</div>
                        <div class="dot l" data-role="unread-dot"></div>
                        <div class="title-cont l">
                            <div class="title l limit" style="max-width: 437px;">想了解四川省选调生的同学都可以进来看看</div>
                            <img src="images/topics/attach.png">
                            <img src="images/topics/wz.png">
                        </div>
                        <div class="avatar l"><a class="link" href="user.php?uid=27213"></a>
                            <img src="/attach/avatar/B/Bond.jpg?t=1500365971">
                        </div>
                        <div class="author l"><a class="link" href="user.php?uid=27213"></a>
                            <div class="name limit">Bond</div>
                            <div class="time">10-25 18:22</div>
                        </div>
                        <div class="reply-num l">0</div>
                        <div class="author l"><a class="link" href="post-read.php?bid=464&amp;threadid=16250965&amp;page=a&amp;postid=17085476#17085476"></a>
                            <div class="name limit">Bond</div>
                            <div class="time">10-25 18:22</div>
                        </div>
                    </div>
                    <!-- list item -->
                    <div class="list-item-topic list-item" data-itemid="16248828"><a class="link" href="post-read.php?bid=464&amp;threadid=16248828"></a>
                        <div class="id l">8033</div>
                        <div class="dot l" data-role="unread-dot"></div>
                        <div class="title-cont l">
                            <div class="title l limit" style="max-width: 499px;">强烈推荐个电影，笑喷了。。。。</div>
                        </div>
                        <div class="avatar l"><a class="link" href="user.php?uid=47759"></a>
                            <img src="images/user/portrait-mas.png">
                        </div>
                        <div class="author l"><a class="link" href="user.php?uid=47759"></a>
                            <div class="name limit">NeverDavid</div>
                            <div class="time">10-20 16:35</div>
                        </div>
                        <div class="reply-num l">5</div>
                        <div class="author l"><a class="link" href="post-read.php?bid=464&amp;threadid=16248828&amp;page=a&amp;postid=17083787#17083787"></a>
                            <div class="name limit">NeverDavid</div>
                            <div class="time">10-24 22:37</div>
                        </div>
                    </div>
                    <!-- list item -->
                    <div class="list-item-topic list-item" data-itemid="16242363"><a class="link" href="post-read.php?bid=464&amp;threadid=16242363"></a>
                        <div class="id l">7952</div>
                        <div class="dot l" data-role="unread-dot"></div>
                        <div class="title-cont l">
                            <div class="title l limit" style="max-width: 499px;">【试探性】版聚通知---延期</div>
                        </div>
                        <div class="avatar l"><a class="link" href="user.php?uid=14045"></a>
                            <img src="/attach/avatar/A/askyer.jpg?t=1471185493">
                        </div>
                        <div class="author l"><a class="link" href="user.php?uid=14045"></a>
                            <div class="name limit">askyer</div>
                            <div class="time">10-11 15:30</div>
                        </div>
                        <div class="reply-num l">32</div>
                        <div class="author l"><a class="link" href="post-read.php?bid=464&amp;threadid=16242363&amp;page=a&amp;postid=17082612#17082612"></a>
                            <div class="name limit">lyj</div>
                            <div class="time">10-24 11:59</div>
                        </div>
                    </div>
                    <!-- list item -->
                    <div class="list-item-topic list-item" data-itemid="16239838"><a class="link" href="post-read.php?bid=464&amp;threadid=16239838"></a>
                        <div class="id l">7936</div>
                        <div class="dot l" data-role="unread-dot"></div>
                        <div class="title-cont l">
                            <div class="title l limit" style="max-width: 499px;">贵版开学还是版聚一次吧</div>
                        </div>
                        <div class="avatar l"><a class="link" href="user.php?uid=14045"></a>
                            <img src="/attach/avatar/A/askyer.jpg?t=1471185493">
                        </div>
                        <div class="author l"><a class="link" href="user.php?uid=14045"></a>
                            <div class="name limit">askyer</div>
                            <div class="time">10-08 10:20</div>
                        </div>
                        <div class="reply-num l">20</div>
                        <div class="author l"><a class="link" href="post-read.php?bid=464&amp;threadid=16239838&amp;page=a&amp;postid=17082610#17082610"></a>
                            <div class="name limit">lyj</div>
                            <div class="time">10-24 11:59</div>
                        </div>
                    </div>
                    <!-- list item -->
                    <div class="list-item-topic list-item" data-itemid="16249051"><a class="link" href="post-read.php?bid=464&amp;threadid=16249051"></a>
                        <div class="id l">8040</div>
                        <div class="dot l" data-role="unread-dot"></div>
                        <div class="title-cont l">
                            <div class="title l limit" style="max-width: 499px;">贵版目前在线18人！</div>
                        </div>
                        <div class="avatar l"><a class="link" href="user.php?uid=14045"></a>
                            <img src="/attach/avatar/A/askyer.jpg?t=1471185493">
                        </div>
                        <div class="author l"><a class="link" href="user.php?uid=14045"></a>
                            <div class="name limit">askyer</div>
                            <div class="time">10-20 22:20</div>
                        </div>
                        <div class="reply-num l">6</div>
                        <div class="author l"><a class="link" href="post-read.php?bid=464&amp;threadid=16249051&amp;page=a&amp;postid=17080716#17080716"></a>
                            <div class="name limit">laurels</div>
                            <div class="time">10-21 20:36</div>
                        </div>
                    </div>
                    <!-- list item -->
                    <div class="list-item-topic list-item" data-itemid="16247355"><a class="link" href="post-read.php?bid=464&amp;threadid=16247355"></a>
                        <div class="id l">7992</div>
                        <div class="dot l" data-role="unread-dot"></div>
                        <div class="title-cont l">
                            <div class="title l limit" style="max-width: 499px;">除了美好的远方，同乡们有多少人愿意回川发展的呢</div>
                        </div>
                        <div class="avatar l"><a class="link" href="user.php?uid=43064"></a>
                            <img src="/attach/avatar/M/miantry.jpg?t=1498655137">
                        </div>
                        <div class="author l"><a class="link" href="user.php?uid=43064"></a>
                            <div class="name limit">miantry</div>
                            <div class="time">10-18 16:36</div>
                        </div>
                        <div class="reply-num l">49</div>
                        <div class="author l"><a class="link" href="post-read.php?bid=464&amp;threadid=16247355&amp;page=a&amp;postid=17080406#17080406"></a>
                            <div class="name limit">openterran</div>
                            <div class="time">10-21 16:27</div>
                        </div>
                    </div>
                    <!-- list item -->
                    <div class="list-item-topic list-item" data-itemid="16242900"><a class="link" href="post-read.php?bid=464&amp;threadid=16242900"></a>
                        <div class="id l">7964</div>
                        <div class="dot l" data-role="unread-dot"></div>
                        <div class="title-cont l">
                            <div class="title l limit" style="max-width: 499px;">攻略！到天府新区找工作，如何免费入住？</div>
                        </div>
                        <div class="avatar l"><a class="link" href="user.php?uid=51323"></a>
                            <img src="images/user/portrait-mas.png">
                        </div>
                        <div class="author l"><a class="link" href="user.php?uid=51323"></a>
                            <div class="name limit">Ericcxd</div>
                            <div class="time">10-12 10:31</div>
                        </div>
                        <div class="reply-num l">9</div>
                        <div class="author l"><a class="link" href="post-read.php?bid=464&amp;threadid=16242900&amp;page=a&amp;postid=17077521#17077521"></a>
                            <div class="name limit">miantry</div>
                            <div class="time">10-20 08:28</div>
                        </div>
                    </div>
                    <!-- list item -->
                    <div class="list-item-topic list-item" data-itemid="16237609"><a class="link" href="post-read.php?bid=464&amp;threadid=16237609"></a>
                        <div class="id l">7914</div>
                        <div class="dot l" data-role="unread-dot"></div>
                        <div class="title-cont l">
                            <div class="title l limit" style="max-width: 480px;">zz&nbsp;四川人为了挽留对方，说过哪些卑微的话</div>
                            <img src="images/topics/attach.png">
                        </div>
                        <div class="avatar l"><a class="link" href="user.php?uid=4355"></a>
                            <img src="/attach/avatar/D/Drifter.jpg?t=1467912521">
                        </div>
                        <div class="author l"><a class="link" href="user.php?uid=4355"></a>
                            <div class="name limit">Drifter</div>
                            <div class="time">10-03 14:27</div>
                        </div>
                        <div class="reply-num l">21</div>
                        <div class="author l"><a class="link" href="post-read.php?bid=464&amp;threadid=16237609&amp;page=a&amp;postid=17046513#17046513"></a>
                            <div class="name limit">Bingoxiequ</div>
                            <div class="time">10-06 10:44</div>
                        </div>
                    </div>
                    <!-- list item -->
                    <div class="list-item-topic list-item" data-itemid="16193036"><a class="link" href="post-read.php?bid=464&amp;threadid=16193036"></a>
                        <div class="id l">7757</div>
                        <div class="dot l" data-role="unread-dot"></div>
                        <div class="title-cont l">
                            <div class="title l limit" style="max-width: 499px;">贵版怎么没有新人呢</div>
                        </div>
                        <div class="avatar l"><a class="link" href="user.php?uid=14045"></a>
                            <img src="/attach/avatar/A/askyer.jpg?t=1471185493">
                        </div>
                        <div class="author l"><a class="link" href="user.php?uid=14045"></a>
                            <div class="name limit">askyer</div>
                            <div class="time">08-29 22:33</div>
                        </div>
                        <div class="reply-num l">46</div>
                        <div class="author l"><a class="link" href="post-read.php?bid=464&amp;threadid=16193036&amp;page=a&amp;postid=17037780#17037780"></a>
                            <div class="name limit">askyer</div>
                            <div class="time">09-30 21:55</div>
                        </div>
                    </div>
                    <!-- list item -->
                    <div class="list-item-topic list-item" data-itemid="16230166"><a class="link" href="post-read.php?bid=464&amp;threadid=16230166"></a>
                        <div class="id l">7874</div>
                        <div class="dot l" data-role="unread-dot"></div>
                        <div class="title-cont l">
                            <div class="title l limit" style="max-width: 499px;">昨天又去了一趟老鼠人</div>
                        </div>
                        <div class="avatar l"><a class="link" href="user.php?uid=15395"></a>
                            <img src="/attach/avatar/A/angelbeats.jpg?t=1482906514">
                        </div>
                        <div class="author l"><a class="link" href="user.php?uid=15395"></a>
                            <div class="name limit">angelbeats</div>
                            <div class="time">09-25 10:21</div>
                        </div>
                        <div class="reply-num l">32</div>
                        <div class="author l"><a class="link" href="post-read.php?bid=464&amp;threadid=16230166&amp;page=a&amp;postid=17026873#17026873"></a>
                            <div class="name limit">askyer</div>
                            <div class="time">09-27 15:18</div>
                        </div>
                    </div>
                    <!-- list item -->
                    <div class="list-item-topic list-item" data-itemid="16223699"><a class="link" href="post-read.php?bid=464&amp;threadid=16223699"></a>
                        <div class="id l">7872</div>
                        <div class="dot l" data-role="unread-dot"></div>
                        <div class="title-cont l">
                            <div class="title l limit" style="max-width: 499px;">未名起居注&nbsp;2017年09月19日(转载)</div>
                        </div>
                        <div class="avatar l"><a class="link" href="user.php?uid=17149"></a>
                            <img src="/attach/avatar/M/mayyao.jpg?t=1491962979">
                        </div>
                        <div class="author l"><a class="link" href="user.php?uid=17149"></a>
                            <div class="name limit">mayyao</div>
                            <div class="time">09-20 13:48</div>
                        </div>
                        <div class="reply-num l">1</div>
                        <div class="author l"><a class="link" href="post-read.php?bid=464&amp;threadid=16223699&amp;page=a&amp;postid=17001233#17001233"></a>
                            <div class="name limit">uandcp</div>
                            <div class="time">09-20 16:53</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="paging">
                <div class="paging-button n active"><a class="link" href="?bid=464&amp;mode=topic"></a>1</div>
                <div class="paging-button n"><a class="link" href="?bid=464&amp;mode=topic&amp;page=2"></a>2</div>
                <div class="paging-button n"><a class="link" href="?bid=464&amp;mode=topic&amp;page=3"></a>3</div>
                <div class="paging-button n"><a class="link" href="?bid=464&amp;mode=topic&amp;page=4"></a>4</div>
                <div class="paging-button n"><a class="link" href="?bid=464&amp;mode=topic&amp;page=5"></a>5</div>
                <div class="paging-button n"><a class="link" href="?bid=464&amp;mode=topic&amp;page=6"></a>6</div>
                <div class="paging-button n"><a class="link" href="?bid=464&amp;mode=topic&amp;page=7"></a>7</div>
                <div class="paging-button n"><a class="link" href="?bid=464&amp;mode=topic&amp;page=8"></a>8</div>
                <div class="paging-button n"><a class="link" href="?bid=464&amp;mode=topic&amp;page=9"></a>9</div>
                <div class="paging-button n"><a class="link" href="?bid=464&amp;mode=topic&amp;page=119"></a>...119</div>
                <div class="paging-button n"><a class="link" href="?bid=464&amp;mode=topic&amp;page=2"></a>下一页 &gt;</div>
                <div class="paging-input-wrapper"><input type="number" data-role="goto-input" max="119" min="1" value="1"></div>
                <div>/ 119</div>
                <div class="paging-button"><a data-action="goto-link" class="link" data-bid="464"></a>跳转</div>
            </div>
        </div>
        <!-- end board-body -->

        <!-- start _new-thread-simple.php-->
        <!-- start new-thread-simple -->
        <div class="editor-wrapper">
            <div class="disable-mask"><p>请您先 <a href="javascript:document.getElementById('username').focus();">登录</a> 再进行发帖</p></div>
            <div id="bdwm-editor" class="bdwm-editor" data-bid="464" data-parentid=""
                 data-title="" data-redirect="">
                <div class="row">
                    <span>快捷发帖</span>
                </div>
                <div class="row">
                    <span class="title">标题</span>
                    <div class="input-wrapper title-input"><input type="text" data-role="post-title" maxlength="48" tabindex="-1" value=""></div>
                    <span class="title-suggest">建议：≤ 24个字</span>
                    <div class="r">
                        <a class="switch-button" href="post-new.php?bid=464">
                            <img src="images/mail/iconfont-fatie.png">
                            <span>切换到完整模式</span>
                        </a>
                    </div>
                </div>
                <div class="input-wrapper content-input" ><textarea data-role="new-post-textarea" tabindex="-1"  placeholder="插入图片、公式、附件，请点击右上方“切换到完整模式”。"></textarea></div>
                <div class="row">
                    <span class="title">签名档</span>
                    <div class="cs-select">
                        <section>
                            <select class="cs-select" data-role="signature" data-signature-count="0" >
                                <option value="" >无</option>
                            </select>
                        </section>
                    </div>
                    <div class="r">
                        <div class="input-wrapper">
                            <input id="input-anonymous6697721" data-role="input-anonymous" type="checkbox" disabled>
                            <label for="input-anonymous6697721">匿名</label>
                            <input id="input-noreply6697721" data-role="input-noreply" type="hidden" value="false">
                        </div>
                        <div class="publish-button extended" data-action="new-post-publish" tabindex="-1">发布(Ctrl+回车)</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end new-thread-simple -->

        <!-- end _new-thread-simple.php-->

    </div>

    <!-- end main -->
    <!-- content end-->
</div>