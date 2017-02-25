<template>

    <div class="row">

        <div class="col-lg-12">

            <h1>Widgets</h1>

            <search-box></search-box>

            <grid-count></grid-count>

            <section class="panel">

                <div class="panel-body">

                    <table class="table table-bordered table-striped">

                        <table-head></table-head>

                        <tbody>

                        <tr v-for="row in gridData">

                            <td>

                                   {{ row.Id }}

                            </td>

                            <td>

                                <a v-bind:href="'/widget/' + row.Id + '-' + row.Slug "> {{ row.Name }}</a>

                            </td>

                            <td>

                                   {{ row.Created }}

                            </td>

                            <td >

                                <a v-bind:href="'/widget/' + row.Id + '/edit'">

                                <button type="button" class="btn btn-default">

                                        Edit

                                </button>

                                </a>

                            </td>

                        </tr>

                        </tbody>

                    </table>

                </div>

                <page-number></page-number>

            </section>

            <pagination></pagination>
            <create-button></create-button>

        </div>

    </div>

</template>

<script>

    var gridData = require('../utilities/gridData');


    export default {

        components: {'pagination' : require('./Pagination'),
                     'search-box' : require('./SearchBox'),
                     'grid-count' : require('./GridCount'),
                     'page-number' : require('./PageNumber'),
                     'table-head' : require('./TableHead')},

        mounted: function () {

            gridData.loadData('api/widget-data', this);

        },
        data: function () {
            return {
                query: '',
                gridColumns: ['Id', 'Name', 'Created'],
                gridData: [],
                total: null,
                next_page_url: null,
                prev_page_url: null,
                last_page: null,
                current_page: null,
                pages: [],
                first_page_url: null,
                last_page_url: null,
                go_to_page: null,
                sortOrder: 1,
                sortKey: '',
                createUrl: '/widget/create',
                showCreateButton: true
            }
        },

        methods: {

            sortBy: function (key){
                this.sortKey = key;
                this.sortOrder = (this.sortOrder == 1) ? -1 : 1;
                this.getData(1);
            },

            search: function(query){
                this.getData(query);
            },


            getData:  function(request){

                gridData.getQueryData(request, 'api/widget-data', this);

            },

            setPageNumbers: function(){
                for (var i = 1; i <= this.last_page; i++) {
                    this.pages.push(i);
                }
            },

            checkPage: function(page){
                return page == this.current_page;
            },

            resetPageNumbers: function(){
                this.pages = [];
                for (var i = 1; i <= this.last_page; i++) {
                     this.pages.push(i);
                }
            },

            checkUrlNotNull: function(url){
                return url != null;
            },

            clearPageNumberInputBox: function(){
                return this.go_to_page = '';
            },

            pageInRange: function(){
                return this.go_to_page <= parseInt(this.last_page);
            }

        }

    }

</script>