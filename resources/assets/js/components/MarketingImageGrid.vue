<template>
    <div class="row">
        <div class="col-lg-12">
            <h1>Marketing Images</h1>
            <search-box></search-box>
            <grid-count></grid-count>
            <section class="panel">
                <div class="panel-body">

                    <table class="table table-bordered table-striped">

                        <thead>
                        <tr>
                            <th v-for="key in gridColumns"
                                @click="sortBy(key)"
                                v-bind:class="{active: sortKey == key}">
                                {{ key }}
                                <span class="arrow"
                                      v-bind:class="sortOrder > 0 ? 'asc' : 'dsc'">
                                </span>
                            </th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr v-for="row in gridData">
                            <td> <a v-bind:href="'/marketing-image/' + row.Id ">
                                <img v-bind:src="'/imgs/marketing/thumbnails/thumb-' + row.Name + '.' + row.Ext "></a>
                            </td>
                            <td>
                                <a v-bind:href="'/marketing-image/' + row.Id "> {{ row.Name }}</a>
                            </td>
                            <td>
                                {{ row.Weight }}
                            </td>
                            <td>
                                {{ convertBoolean(row.Featured) }}
                            </td>
                            <td>
                                {{ convertBoolean(row.Active) }}
                            </td>

                            <td>
                                {{ row.Created }}
                            </td>
                            <td ><a v-bind:href="'/marketing-image/' + row.Id + '/edit'">
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


        </div>
    </div>

</template>

<script>

    var gridData = require('../utilities/gridData');

    export default {

        components: {'pagination' : require('./Pagination'),
                     'search-box' : require('./SearchBox'),
                     'grid-count' : require('./GridCount'),
                     'page-number' : require('./PageNumber')},

        mounted: function () {

            gridData.loadData('api/marketing-image-data', this);

        },
        data: function () {
            return {
                query: '',
                gridColumns: ['Thumbnail', 'Name', 'Weight', 'Featured', 'Active','Created'],
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
                createUrl: '/marketing-image/create',
                showCreateButton: true
            }
        },
        methods: {

            convertBoolean: function (value){
                return value == 1 ? 'Yes' : 'No';
            },

            sortBy: function (key){
                this.sortKey = key;
                this.sortOrder = (this.sortOrder == 1) ? -1 : 1;
                this.getData(1);
            },

            search: function(query){
                this.getData(query);
            },


            getData:  function(request){

                gridData.getQueryData(request, 'api/marketing-image-data', this);

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