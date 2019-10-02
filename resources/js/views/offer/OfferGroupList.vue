<template>
	<div>
		<div v-if="offerGroups.length > 0">
			Big offerlist
		</div>
		<div v-else>
			<div class="text-center">
				<img v-bind:src="'/images/Folder.png'" />
				<div class="row">
					<div class="col-md-2">
					</div>
					<div class="col-md-8">
						It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
					</div>
				</div>
				<br>
				<div class="row">
					<el-button class="create-new-btn">Create group</el-button>
				</div>
			</div>
			<br>
		</div>
	</div>
</template>

<script>
    export default {
		name: 'offer-group-list',
		props: {
			offerGroups: {
				type: Array
			}
		}
    }
</script>

<style lang="scss" scoped>
</style>
