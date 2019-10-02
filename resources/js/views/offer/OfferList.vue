<template>
    <div>
        <div class='content-header'>
            <div class="row">
                <div class="col-xs-1">
                </div>
                <div class="col-xs-10">
                    <h2>Manage offers</h2>
                </div>
            </div>
        </div>

        <div class='content'>
            <div class="row">
                <div class="col-xs-1">
                </div>
                <div class="col-xs-5">
                    <el-button class="create-new-btn">Create new &nbsp;&nbsp;&nbsp;&nbsp;<span>+</span></el-button>
                </div>
                <div class="col-xs-5">
                    <template>
                        <el-input
                            v-model="search"
							prefix-icon="el-icon-search"
                            placeholder="Type to search"
							clearable/>
                    </template>
                </div>
            </div>
			<br>
            <div class="row">
                <div class="col-xs-1">
                </div>
                <div class="col-xs-10">
					<div class="box round-edge-box">
						<div class="box-body">
							<el-tabs v-model="activeName" @tab-click="handleClick">
								<el-tab-pane label="Offers" name="offer">
									<el-table
										:data="offers.filter(data => !search || data.name.toLowerCase().includes(search.toLowerCase()))"
										style="width: 100%"
										column-gap="40px">
										<el-table-column
											min-width="100"
											label="Name"
											prop="name">
										</el-table-column>
										<el-table-column
											min-width="80"
											prop="group_name">
										</el-table-column>
										<el-table-column
											prop="date"
											label="Date"
											sortable
											width="100"
											column-key="date">
										</el-table-column>
										<el-table-column
											label="CVS RATE"
											prop="cvs_rate">
										</el-table-column>
										<el-table-column
											label="AOV"
											prop="aov">
										</el-table-column>
										<el-table-column
											label="Views"
											prop="views">
										</el-table-column>
										<el-table-column
											align="right">
											<template slot-scope="scope">
												<el-button
													size="mini"
													@click="handleEdit(scope.$index, scope.row)">Action</el-button>
											</template>
										</el-table-column>
									</el-table>
									<br>
									<el-pagination
										class="text-center"
										layout="prev, pager, next"
										:total="1000">
									</el-pagination>
								</el-tab-pane>
								<el-tab-pane label="Groups" name="group">
									<OfferGroupList :offerGroups="offerGroups"></OfferGroupList>
								</el-tab-pane>
							</el-tabs>
						</div>
					</div>
				</div>
            </div>
        </div>
    </div>
</template>

<script>
import OfferGroupList from './OfferGroupList.vue'

export default {
    data() {
        return {
            offers: [{
                name: 'Red Shoes A82 Super Awesome No.1',
                address: 'No. 189, Grove St, Los Angeles',
                group_name: 'Group Name',
                date: '2016-05-02',
                cvs_rate: '35%',
                aov: '$234.04',
                views: 142,
            }, {
                name: 'Yellow Shoes A82 Super Awesome No.1',
                address: 'No. 189, Grove St, Los Angeles',
                group_name: 'Group Name',
                date: '2016-05-03',
                cvs_rate: '35%',
                aov: '$234.04',
                views: 142,
            }, {
                name: 'Green Shoes A82 Super Awesome No.1',
                address: 'No. 189, Grove St, Los Angeles',
                group_name: 'Group Name',
                date: '2016-05-04',
                cvs_rate: '35%',
                aov: '$234.04',
                views: 142,
            }, {
                name: 'Black Shoes A82 Super Awesome No.1',
                address: 'No. 189, Grove St, Los Angeles',
                group_name: 'Group Name',
                date: '2016-05-05',
                cvs_rate: '35%',
                aov: '$234.04',
                views: 142,
            }],
            offerGroups: [],
            search: '',
            activeName: 'offer'
        }
    },
	components: {
		OfferGroupList
	},
    methods: {
        handleEdit(index, row) {
            console.log(index, row);
        },
        handleDelete(index, row) {
            console.log(index, row);
        },
    },
}
</script>

<style>
	.round-edge-box {
		border-radius: 10px;
	}

	.create-new-btn {
		background: #4C5B75;
		color: white;
		border-radius: 6px;
	}
</style>
