<div class="container">
<div class="col-md-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="text-center">Bootstrap Editable jQuery Grid <span class="fa fa-edit pull-right bigicon"></span></h4>
        </div>
        <div class="panel-body text-center">
            <div id="grid"></div>
        </div>
    </div>
</div>

<div>
This template uses the ShieldUI-Lite open source Suite.<br />
It renders a responsive grid component, which has editing capabilities.<br />
The sample uses the <a href="https://github.com/shieldui/shieldui-lite/\">ShieldUI-Lite</a> jquery Grid component for visualization of data.<br />
To see more examples of this type of widget, please go <a href="https://demos.shieldui.com/web/grid-editing/editing-custom-editor\">here</a>.<br />
The component supports many different types of editing, which can be used to further enhance this template. <br />
Easy to ahieve is cell-based <a href="https://github.com/shieldui/shieldui-lite/\">editing</a>, where only single cell is edited at a time. <br />
Also built in is <a href="https://demos.shieldui.com/web/grid-editing/inline-editing/\">inline-editing</a>, which is most often used. <br />
Batch operations and updates are also <a href="https://demos.shieldui.com/web/grid-editing/batch-editing/\">supported</a> and allow multiple update operations. <br />
For more advanced scenarios, you can refer to the <a href="https://demos.shieldui.com/web/grid-editing/editing-restful-web-service/\">Restful web services </a> samples. <br />
For each editing operation, <a href="https://demos.shieldui.com/web/grid-editing/editing-validation/\">validation</a> can be used to safeguard against errors. <br />
Additional editors can be employed as well, such as <a href="https://demos.shieldui.com/web/grid-editing/editing-external-form/\">external editors</a> to handle custom layout requirements. <br />
</div>

</div>

<!-- you need to include the shieldui css and js assets in order for the grids to work -->
<link rel="stylesheet" type="text/css" href="http://www.prepbootstrap.com/Content/shieldui-lite/dist/css/light/all.min.css" />
<script type="text/javascript" src="http://www.prepbootstrap.com/Content/shieldui-lite/dist/js/shieldui-lite-all.min.js"></script>

<script type="text/javascript" src="http://www.prepbootstrap.com/Content/data/shortGridData.js"></script>

<script type="text/javascript">
    $(document).ready(function () {
        $("#grid").shieldGrid({
            dataSource: {
                data: gridData,
                schema: {
                    fields: {
                        id: { path: "id", type: Number },
                        age: { path: "age", type: Number },
                        name: { path: "name", type: String },
                        company: { path: "company", type: String },
                        month: { path: "month", type: Date },
                        isActive: { path: "isActive", type: Boolean },
                        email: { path: "email", type: String },
                        transport: { path: "transport", type: String }
                    }
                }
            },
            sorting: {
                multiple: true
            },
            rowHover: false,
            columns: [
                { field: "name", title: "Person Name", width: "120px" },
                { field: "age", title: "Age", width: "80px" },
                { field: "company", title: "Company Name" },
                { field: "month", title: "Date of Birth", format: "{0:MM/dd/yyyy}", width: "120px" },
                { field: "isActive", title: "Active" },
                { field: "email", title: "Email Address", width: "250px" },
                { field: "transport", title: "Custom Editor", width: "120px", editor: myCustomEditor },
                {
                    width: "104px",
                    title: "Delete Column",
                    buttons: [
                        { cls: "deleteButton", commandName: "delete", caption: "<img src='http://www.prepbootstrap.com/Content/images/template/BootstrapEditableGrid/delete.png' /><span>Delete</span>" }
                    ]
                }
            ],
            editing: {
                enabled: true,
                event: "click",
                type: "cell",
                confirmation: {
                    "delete": {
                        enabled: true,
                        template: function (item) {
                            return "Delete row with ID = " + item.id
                        }
                    }
                }
            },
            events:
            {
                getCustomEditorValue: function (e) {
                    e.value = $("#dropdown").swidget().value();
                    $("#dropdown").swidget().destroy();
                }
            }
        });

        function myCustomEditor(cell, item) {
            $('<div id="dropdown"/>')
                .appendTo(cell)
                .shieldDropDown({
                    dataSource: {
                        data: ["motorbike", "car", "truck"]
                    },
                    value: !item["transport"] ? null : item["transport"].toString()
                }).swidget().focus();
        }
    });
</script>

<style type="text/css">
    .sui-button-cell
    {
        text-align: center;
    }

    .sui-checkbox
    {
        font-size: 17px !important;
        padding-bottom: 4px !important;
    }

    .deleteButton img
    {
        margin-right: 3px;
        vertical-align: bottom;
    }

    .bigicon
    {
        color: #5CB85C;
        font-size: 20px;
    }
</style>
