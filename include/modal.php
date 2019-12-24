<link rel="stylesheet" href="css/perfect-scrollbar.css">
<script src="js/perfect-scrollbar.js"></script>

<link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>

        <div class="modal_outer scroll-block">
            <div class="modal_backdrop js_trigger__close_modal"></div>
            <!-- modal-video -->
            <div class="modal modal_video xy-center" id="modal_video">
                <div class="ratio_setter_hd"></div>
                <div class="close js_trigger__close_modal">
                    <i class="material-icons">clear</i>
                </div>
            </div>
            <!-- modal-video end -->

            <!-- modal-pass -->
            <div class="modal modal-pass xy-center ps" id="modal-pass">
                <div class="tit-area">
                    <div class="tit">비밀번호확인</div>
                    <div class="close js-modal-close">
                        <i class="material-icons">clear</i>
                    </div>
                </div>
                <div class="ctn-area">
                    <div class="txt">
                        글 등록 시 입력한 글 비밀번호를 입력해주세요.
                    </div>
                    <div class="modal-form-box">
                        <form name="">
                            <input type="password" name="pass" autocomplete="new_password" validation="vali_text" alt="비밀번호" class="ipt" />
                            <input type="submit" name="" class="submit" value="확인" />
                            <div class="cancel js-modal-close">취소</div>
                        </form>
                    </div>
                    <div class="info">
                        비밀번호가 틀렸습니다. 다시 한번 입력해주세요.
                    </div>
                </div>
            </div>
            <!-- modal-pass end -->

            <!-- modal-terms -->
            <div class="modal modal-document xy-center " id="modal-terms">
                <div class="tit-area">
                    <div class="tit">홈페이지 이용약관</div>
                    <div class="close js-modal-close">
                        <i class="material-icons">clear</i>
                    </div>
                </div>

                <div class="ctn-area">
                    <div class="modal-form-box">
                        <div class="ipt document" id="aa" style="overflow:hidden" readonly>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi officiis corporis repellat expedita quisquam illo consectetur cumque magnam quae quod hic voluptatum pariatur, debitis totam ut deserunt velit voluptates? Quam!
                        Totam, at fuga ullam mollitia laborum magni tempore quis sit necessitatibus repellat voluptates beatae dolorem eveniet consectetur laboriosam deleniti cum quod! Explicabo amet quibusdam magnam veniam sint minus blanditiis porro.
                        Nihil explicabo doloremque molestias, eum tempora sequi architecto exercitationem aspernatur sunt pariatur sit suscipit officiis iusto, id sapiente reiciendis maxime. Inventore adipisci officiis excepturi velit iure natus, tenetur magni cumque.
                        Quos dolorem magnam cum esse illum blanditiis maiores suscipit optio. Alias, laborum incidunt impedit totam at sit autem rerum facere earum eligendi ipsam magni culpa nisi doloribus repellat exercitationem ullam.
                        Est deserunt nihil, possimus quia eos omnis aliquid fugit in cupiditate natus. Esse modi placeat, veniam doloremque ipsum quo molestiae ducimus officiis libero suscipit ipsam nesciunt excepturi ad dolore sequi.
                        Molestias voluptatem sapiente quisquam facilis nemo exercitationem, numquam dolor mollitia dolore reprehenderit corporis neque quam delectus voluptate quo officiis suscipit similique unde quia soluta nesciunt asperiores? Voluptate possimus minus tempora.
                        Explicabo alias accusamus voluptatem animi reiciendis mollitia adipisci quibusdam voluptatum maiores, asperiores iusto repellendus. Cum temporibus dolores laudantium culpa atque, dolorem ratione natus earum corrupti cupiditate, fuga sint sed iure?
                        Culpa, harum deleniti? Voluptatem, et. Nam, eum itaque quae sint facere autem laudantium ex debitis consectetur! Veritatis expedita fugit consectetur ratione mollitia porro tempore fuga, sint adipisci magni nulla quo?</div>
                    </div>
                </div>
            </div>
            <!-- modal-terms end-->

            <!-- modal-privacy -->
            <div class="modal modal-document xy-center" id="modal-privacy">
                <div class="tit-area">
                    <div class="tit">개인정보의 수집 및 이용목적</div>
                    <div class="close js-modal-close">
                        <i class="material-icons">clear</i>
                    </div>
                </div>

                <div class="ctn-area">
                    <div class="modal-form-box">
                        <textarea class="ipt document scroll-block" readonly>
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</textarea
                        >
                    </div>
                </div>
            </div>
            <!-- modal-privacy end -->
        </div>

        <div
            id="temp"
            style="width:100px; height:100px; background:#444; display:block; position:fixed; z-index:900000; left:100px; bottom:100px; text-align:center; line-height:50px; color:#fff; cursor:pointer;"
            onclick="loadModal('modal-terms','')"
        ></div>

        <script>

        function loadModal(el,type) {
            // $(".modal_outer").addClass("js_is_active");
            var modalOutter = $(".modal_outer");
            var modalTarget = $("#"+ el +"");
             
            //var findModal= modalTarget.find('.modal');
            var findCloseTrigger = $('.js_trigger__close_modal');

            if (type == 'video') {
                video_val = $(this).attr("video_value");
				$(".modal_video .ratio_setter_hd").html("<iframe src='https://www.youtube.com/embed/"+video_val+"?controls=0&showinfo=0&rel=0&autoplay=1&loop=0' frameborder='0' allowfullscreen></iframe>")
            }
            
            $('#aa').mCustomScrollbar({
                theme:"dark"
            });

            modalOutter.addClass('js_is_active');
            modalTarget.addClass('js_is_active');
            // findModal.addClass('js_is_active');
            findCloseTrigger.click(function() {
                // $(".modal_outer").removeClass("js_is_active");
                modalOutter.removeClass('js_is_active');
                modalTarget.removeClass('js_is_active');
                // findModal.removeClass('js_is_active');
                if (type == 'video') {
                    $(".modal_video .ratio_setter_hd").html("");
                }
            });
            
        }

		
	
            //$(".temp").click(function(){
            //alert();
            /*

        if($(this).hasClass("active")) {
            $(this).removeClass("active");
            $('html, body').removeClass("js_is_fixed");
            $('body').scrollTop(kk);
        }
        else {
            kk = $('body').scrollTop();
            $(this).addClass("active");
            $('html, body').addClass("js_is_fixed");
        }
        */

            //});

            $(".scroll-block").bind("mousewheel DOMMouseScroll", function(e) {
                var e0 = e.originalEvent,
                    delta = e0.wheelDelta || -e0.detail;
                this.scrollTop += (delta < 0 ? 1 : -1) * 30;
                e.preventDefault();
            });
            /*
        window.blockMenuHeaderScroll = false;
        $(window).on('touchstart', function(e)
        {
            if ($(e.target).closest('#mobileMenuHeader').length == 1)
            {
                blockMenuHeaderScroll = true;
            }
        });
        $(window).on('touchend', function()
        {
            blockMenuHeaderScroll = false;
        });
        $(window).on('touchmove', function(e)
        {
            if (blockMenuHeaderScroll)
            {
                e.preventDefault();
            }
        });
        */
        </script>