{include file='admin/main.tpl'}

<main class="content">
    <div class="content-header ui-content-header">
        <div class="container">
            <h1 class="content-heading">用户列表</h1>
        </div>
    </div>
    <div class="container">
        <div class="col-lg-12 col-sm-12">
            <section class="content-inner margin-top-no">

                <div class="card col-lg-4" style="flex: 1; height: 300px;">
                    <div class="card-main">
                        <div class="card-inner">
                            <p>系统中所有用户的列表。</p>
                            <p>
                                付费用户：{$user->paidUserCount()}
                            </p>
                            <p>显示表项:
                                {include file='table/checkbox.tpl'}
                            </p>
                        </div>
                    </div>
                </div>

                <div class="card col-lg-4" style="flex: 2; height: 300px;">
                    <div class="card-main">
                        <div class="card-inner">
                            <div class="form-group form-group-label">
                                <label class="floating-label" for="quick_create_email"> 输入 email 快速创建新用户 </label>
                                <input class="form-control" id="quick_create_email" type="text" style="width: 250px">
                            </div>
                        </div>
                        <div class="card-inner">
                            <div class="form-group form-group-label">
                                <label class="floating-label" for="quick_create_remark"> 备注 </label>
                                <input class="form-control" id="quick_create_remark" type="text" style="width: 250px">
                            </div>
                        </div>

                        <div class="card-inner">
                            <div class="form-group form-group-label">
	                    <label class="floating-label" for="quick_create_shopid"> 选择您要开通的套餐 </label>
                                    <select id="quick_create_shopid" class="form-control" name="quick_create_shopid" style="width: 250px">
{foreach $shops as $shop}
                                        <option value="{$shop->id}">{$shop->name}
                                        </option>
{/foreach}
                                        <option value="0" selected> 无
                                        </option>
                                    </select>
                                </label>
                            </div>
                        </div>


                        <div class="card-action">
                            <div class="card-action-btn pull-left">
                                <a class="btn btn-brand waves-attach waves-light" id="quick_create_confirm">创建</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card col-lg-4" style="flex: 3; height: 300px;">
                    <div class="card-main">
                        <div class="card-inner">
                            <div class="form-group form-group-label">
                                <label class="floating-label" for="quick_buy_email"> Email </label>
                                <input class="form-control" id="quick_buy_email" type="text" style="width: 250px">
                            </div>
                        </div>
                        <div class="card-inner">
                            <div class="form-group form-group-label">
	                    <label class="floating-label" for="quick_buy_shopid"> 选择您要添加的套餐 </label>
                                    <select id="quick_buy_shopid" class="form-control" name="quick_buy_shopid" style="width: 250px">
                                    {foreach $shops as $shop}
                                        <option value="{$shop->id}">{$shop->name}
                                        </option>
                                    {/foreach}
                                    </select>
                                </label>
                            </div>
                        </div>


                        <div class="card-action">
                            <div class="card-action-btn pull-left">
                                <a class="btn btn-brand waves-attach waves-light" id="quick_buy_confirm">确定</a>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="table-responsive col-lg-12">
                    {include file='table/table.tpl'}
                </div>

                <div class="card col-lg-12">
                    <div class="card-main">
                        <div class="card-inner">
                            <div class="form-group form-group-label">
                                <label class="floating-label" for="addall_transfer"> 统一添加的流量(单位: G) </label>
                                <input class="form-control" id="addall_transfer" type="text" style="width: 250px">
                            </div>
                        </div>
                        <div class="card-inner">
                            <div class="form-group form-group-label">
                                <label class="floating-label" for="addall_time"> 统一添加的时长(单位: 天) </label>
                                <input class="form-control" id="addall_time" type="text" style="width: 250px">
                            </div>
                        </div>


                        <div class="card-action">
                            <div class="card-action-btn pull-left">
                                <a class="btn btn-brand waves-attach waves-light" id="addall_confirm">确定</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div aria-hidden="true" class="modal modal-va-middle fade" id="delete_modal" role="dialog"
                     tabindex="-1">
                    <div class="modal-dialog modal-xs">
                        <div class="modal-content">
                            <div class="modal-heading">
                                <a class="modal-close" data-dismiss="modal">×</a>
                                <h2 class="modal-title">确认要删除？</h2>
                            </div>
                            <div class="modal-inner">
                                <p>请您确认。</p>
                            </div>
                            <div class="modal-footer">
                                <p class="text-right">
                                    <button class="btn btn-flat btn-brand-accent waves-attach waves-effect"
                                            data-dismiss="modal" type="button">取消
                                    </button>
                                    <button class="btn btn-flat btn-brand-accent waves-attach" data-dismiss="modal"
                                            id="delete_input" type="button">确定
                                    </button>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div aria-hidden="true" class="modal modal-va-middle fade" id="changetouser_modal" role="dialog"
                     tabindex="-1">
                    <div class="modal-dialog modal-xs">
                        <div class="modal-content">
                            <div class="modal-heading">
                                <a class="modal-close" data-dismiss="modal">×</a>
                                <h2 class="modal-title">确认要切换为该用户？</h2>
                            </div>
                            <div class="modal-inner">
                                <p>请您确认。</p>
                            </div>
                            <div class="modal-footer">
                                <p class="text-right">
                                    <button class="btn btn-flat btn-brand-accent waves-attach waves-effect"
                                            data-dismiss="modal" type="button">取消
                                    </button>
                                    <button class="btn btn-flat btn-brand-accent waves-attach" data-dismiss="modal"
                                            id="changetouser_input" type="button">确定
                                    </button>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                {include file='dialog.tpl'}


        </div>


    </div>
</main>


{include file='admin/footer.tpl'}
<script src="https://cdn.jsdelivr.net/npm/clipboard@1.5.16/dist/clipboard.min.js"></script>
<script>
    $(function(){
            new Clipboard('.copy-text');
    });

    $(".copy-text").click(function () {
        $("#result").modal();
        $$.getElementById('msg').innerHTML = '复制成功';
    });

    function delete_modal_show(id) {
        deleteid = id;
        $("#delete_modal").modal();
    }

    function changetouser_modal_show(id) {
        changetouserid = id;
        $("#changetouser_modal").modal();
    }

    {include file='table/js_1.tpl'}

    window.addEventListener('load', () => {
        table_1 = $('#table_1').DataTable({
            order: [[1, 'asc']],
            stateSave: true,
            serverSide: true,
            ajax: {
                url: "/admin/user/ajax",
                type: "POST",
            },
            columns: [
                {literal}
                {"data": "op", "orderable": false},
//                {"data": "id"},
                {"data": "user_name"},
                {"data": "remark"},
                {"data": "email"},
//                {"data": "money"},
//                {"data": "im_type"},
//                {"data": "im_value"},
                {"data": "node_group"},
                {"data": "expire_in"},
                {"data": "class"},
                {"data": "class_expire"},
                {"data": "passwd"},
//                {"data": "port"},
//                {"data": "method"},
//                {"data": "protocol"},
//                {"data": "obfs"},
//                {"data": "obfs_param"},
                {"data": "online_ip_count", "orderable": false},
//                {"data": "last_ss_time", "orderable": false},
                {"data": "used_traffic"},
                {"data": "enable_traffic"},
//                {"data": "last_checkin_time", "orderable": false},
//                {"data": "today_traffic"},
//                {"data": "enable"},
                {"data": "reg_date"},
//                {"data": "reg_ip"},
//                {"data": "auto_reset_day"},
//                {"data": "auto_reset_bandwidth"},
//                {"data": "ref_by"},
//                {"data": "ref_by_user_name", "orderable": false},
//                {"data": "top_up", "orderable": false},
                {"data": "vmess_link", "orderadbel": false},
                {/literal}
            ],
            "columnDefs": [
                {
                    targets: ['_all'],
                    className: 'mdl-data-table__cell--non-numeric'
                }
            ],

            {include file='table/lang_chinese.tpl'}
        });

        var has_init = JSON.parse(localStorage.getItem(`${ldelim}window.location.href{rdelim}-hasinit`));

        if (has_init !== true) {
            localStorage.setItem(`${ldelim}window.location.href{rdelim}-hasinit`, true);
        } else {
            {foreach $table_config['total_column'] as $key => $value}
            var checked = JSON.parse(localStorage.getItem(window.location.href + '-haschecked-checkbox_{$key}'));
            if (checked) {
                $$.getElementById('checkbox_{$key}').checked = true;
            } else {
                $$.getElementById('checkbox_{$key}').checked = false;
            }
            {/foreach}
        }

        {foreach $table_config['total_column'] as $key => $value}
        modify_table_visible('checkbox_{$key}', '{$key}');
        {/foreach}

        function delete_id() {
            $.ajax({
                type: "DELETE",
                url: "/admin/user",
                dataType: "json",
                data: {
                    id: deleteid
                },
                success: data => {
                    if (data.ret) {
                        $("#result").modal();
                        $$.getElementById('msg').innerHTML = data.msg;
                        {include file='table/js_delete.tpl'}
                    } else {
                        $("#result").modal();
                        $$.getElementById('msg').innerHTML = data.msg;
                    }
                },
                error: jqXHR => {
                    $("#result").modal();
                    $$.getElementById('msg').innerHTML = `${ldelim}jqXHR{rdelim} 发生了错误。`;
                }
            });
        }


        $$.getElementById('delete_input').addEventListener('click', delete_id);

        // $$.getElementById('search_button').addEventListener('click', () => {
        //     if ($$.getElementById('search') !== '') search();
        // });


        function changetouser_id() {
            $.ajax({
                type: "POST",
                url: "/admin/user/changetouser",
                dataType: "json",
                data: {
                    userid: changetouserid,
                    adminid: {$user->id},
                    local: '/admin/user'
                },
                success: data => {
                    if (data.ret) {
                        $("#result").modal();
                        $$.getElementById('msg').innerHTML = data.msg;
                        window.setTimeout("location.href='/user'", {$config['jump_delay']});
                    } else {
                        $("#result").modal();
                        $$.getElementById('msg').innerHTML = data.msg;
                    }
                },
                error: jqXHR => {
                    $("#result").modal();
                    $$.getElementById('msg').innerHTML = `${ldelim}jqXHR{rdelim} 发生了错误。`;
                }
            });
        }

        $$.getElementById('changetouser_input').addEventListener('click', changetouser_id);

        function quickCreate() {
            $.ajax({
                type: 'POST',
                url: '/admin/user/create',
                dataType: 'json',
                data: {
                    userEmail: $$getValue('quick_create_email'),
                    userRemark: $$getValue('quick_create_remark'),
                    userShopId: $$getValue('quick_create_shopid'),
                },
                success: data => {
                    $("#result").modal();
                    $$.getElementById('msg').innerHTML = data.msg;
                    window.setTimeout("location.href='/admin/user'", 1000);
                },
                error: jqXHR => {
                    $("#result").modal();
                    $$.getElementById('msg').innerHTML = `${ldelim}jqXHR{rdelim} 发生了错误。`;
                }
            })
        }

        $$.getElementById('quick_create_confirm').addEventListener('click', quickCreate);

        function quickBuy() {
            $.ajax({
                type: 'POST',
                url: '/admin/user/quickbuy',
                dataType: 'json',
                data: {
                    userEmail: $$getValue('quick_buy_email'),
                    userShopId: $$getValue('quick_buy_shopid'),
                },
                success: data => {
                    $("#result").modal();
                    $$.getElementById('msg').innerHTML = data.msg;
                    window.setTimeout("location.href='/admin/user'", 1000);
                },
                error: jqXHR => {
                    $("#result").modal();
                    $$.getElementById('msg').innerHTML = `${ldelim}jqXHR{rdelim} 发生了错误。`;
                }
            })
        }

        $$.getElementById('quick_buy_confirm').addEventListener('click', quickBuy);

       function addAll() {
            $.ajax({
                type: 'POST',
                url: '/admin/user/addall',
                dataType: 'json',
                data: {
                    userAddTransfer: $$getValue('addall_transfer'),
                    userAddTime: $$getValue('addall_time'),
                },
                success: data => {
                    $("#result").modal();
                    $$.getElementById('msg').innerHTML = data.msg;
                    window.setTimeout("location.href='/admin/user'", 1000);
                },
                error: jqXHR => {
                    $("#result").modal();
                    $$.getElementById('msg').innerHTML = `${ldelim}jqXHR{rdelim} 发生了错误。`;
                }
            })
        }
        $$.getElementById('addall_confirm').addEventListener('click', addAll);
    });


</script>
