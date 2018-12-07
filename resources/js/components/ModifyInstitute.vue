<template>
	<div>
		
			<!--  <h1>
				<a @click="sayhi()" > Hello World </a>
			</h1 -->
			<hr>

			<div id="modal"class="modal is-active" v-if="showModal">
				<div class="modal-background"></div>
				<div class="modal-card">
					<header class="modal-card-head">
						<p class="modal-card-title">Modify Institute</p>
						<button class="delete" aria-label="close" @click="closeModal()"></button>
					</header>

					<section class="modal-card-body">

						<form v-if="showform" method="POST"  @submit="submitModifyInstiForm">

							<input type="hidden" name="_token" :value="csrf">

							<input type="text" name="name" v-model="instituteName">

							<footer class="modal-card-foot">
								<button type="submit" class="button is-success" >Save changes</button>
								<button class="button" @click="closeModal()">Cancel</button>
							</footer>

						</form>

					</section>	

				</div> 

			</div>
			<li v-for="oneinstitute in institute"> 

				<a @click="modifyInstitute(oneinstitute)"> {{oneinstitute.name}} </a> 

			</li>

	</div>

	</template>

	<script>

		export default{
			props:{
				institute:Array

			},

			data(){
				return {
					showform:false,
					instituteName:"",
					// modifyMe:false,
					showModal:false,
					csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),

				}

			},

			methods	:{

				modifyInstitute(selected){

					this.institute.forEach(names=>{

						if(selected.name == names.name){

							this.instituteName= selected.name;	

						}

					});

					this.showform = true;
					this.showModal=true;			
				},

				closeModal(){

					this.showModal=false;
				},
				
				openModal(){

					this.showModal=true;

				},

				submitModifyInstiForm(){

					// this.modifyMe=true;

					axios.post('/institutes',{

						'name': this.instituteName,
						// 'modify':this.modifyMe,
					});

					this.closeModal();
				}
			},
		}	

	</script>	
