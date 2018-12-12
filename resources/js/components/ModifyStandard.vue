<template>
	<div>
		
			<hr>

			<div id="modal"class="modal is-active" v-if="showModal">
				<div class="modal-background"></div>
				<div class="modal-card">
					<header class="modal-card-head">
						<p class="modal-card-title">Modify Standard</p>
						<button class="delete" aria-label="close" @click="closeModal()"></button>
					</header>
					

					<section class="modal-card-body">

						<form v-if="showform"  method="POST" :action="urlValue" @submit="submitModifyStdForm">

							<input type="hidden" name="_token" :value="csrf">

							<input type="text" name="name" v-model="standardName">

							<input type="text" name="id" v-model="standardId" :disabled="true">

							<footer class="modal-card-foot">
								<button type="submit" class="button is-success" >Save changes</button>
								<button class="button" @click="closeModal()">Cancel</button>
							</footer>
								<header class="modal-card-head">
									<p class="modal-card-title">Or Create an Exam </p>
								</header>		

							<footer class="modal-card-foot">
								<a class="button is-link is-rounded" href="/exams" >Create An Exam </a> <br>
							</footer>

						</form>

					</section>	

				</div> 

			</div>

			<li v-for="onestandard in standard"> 

				<a @click="modifyStandard(onestandard)"> {{onestandard.name}} </a> 

			</li>

	</div>

	</template>

	<script>

		export default{
			props:{
				standard:Array

			},

			data(){
				return {
					showform:false,
					standardName:"",
					standardId:"",
					showModal:false,
					csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),

				}

			},

			methods	:{

				modifyStandard(selected){

					this.standard.forEach(names=>{

						if(selected.name == names.name){

							this.standardName= selected.name;
							this.standardId = selected.id;	
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

				submitModifyStdForm(){


					axios.post(this.urlValue,{

						'name': this.standardName,
						'id':this.standardId,

					});
				}
			},

			computed:{

				urlValue: function (){ 
							
								// return '/institute/'+ this.instituteId;

								return '/standards/'+ this.standardId;
				}
			}
		}	

	</script>	
