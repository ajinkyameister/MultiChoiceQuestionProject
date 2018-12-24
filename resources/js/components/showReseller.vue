<template>
	<div>
		<hr>
		
		<div id="modal"class="modal is-active" v-if="showModal">
			<div class="modal-background"></div>
			<div class="modal-card">
				<header class="modal-card-head">
					<p class="modal-card-title">Show Reseller</p>
					<button class="delete" aria-label="close" @click="closeModal()"></button>
				</header>
				<section class="modal-card-body">

					<form v-if="showform" method="POST" :action="urlValue" @submit="submitModifyResellerForm">

						<label> Name:</label>
						<input type="text" name="name" v-model="userName"> <br> <br>

						<input type="hidden" name="_token" :value="csrf">

						<label> Address:</label>
						<input type="text" name="name" v-model="address"> <br> <br>
						
						<label> Phone Number:</label>
						<input type="text" name="name" v-model="phone_number"> <br> <br>
						
						<label> Email:</label>
						<input type="text" name="name" v-model="email"> <br> <br>
						
						<label> PAN Card:</label>
						<input type="text" name="name" v-model="pan_card"> <br> <br>


						<input type="text" name="id" v-model="resellerId" :disabled="true">
						
						<footer class="modal-card-foot">
							<button type="submit" class="button is-success" >Save changes</button>
							<button class="button" @click="closeModal()">Cancel</button>
						</footer>

					</form>	

				</section>	
			</div>

		</div>	
		<li v-for="onereseller in reseller"> 

			<a @click="sayhi(onereseller)"> {{onereseller.name}} </a> 

		</li>
	</div>

</template>

<script>
	
	export default{
		props:{
			reseller:Array

		},

		data(){
			return {
				showform:false,
				showModal:false,
				userName:"",
				address:"",
				phone_number:"",
				email:"",
				pan_card:"",
				resellerId:"",
				csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),

			}

		},

		methods	:{

			sayhi(selected){

				this.reseller.forEach(names=>{

					if(selected.name == names.name){
						
						this.userName = selected.name;	
						this.address = selected.address;
						this.phone_number = selected.phone_number;
						this.email = selected.email;
						this.pan_card = selected.pan_card;
						this.resellerId = selected.id;
					}
					
				});

				

				this.showform = true;
				this.showModal = true;			
			},

			closeModal(){

				this.showModal=false;
				this.showform = false;
			},	

			submitModifyResellerForm(){

				alert(this.address);

				axios.post(this.urlValue,{

						'name': this.userName,
						'address':this.address ,
						'phone_number':this.phone_number,
						'email':this.email,
						'pan_card':this.pan_card,
						'id':this.resellerId,

					});
				}
			},

			computed:{

				urlValue: function (){ 
							
								// return '/institute/'+ this.instituteId;

								return '/users/'+ this.resellerId;
				}
			}

		}	
		
	

</script>	
