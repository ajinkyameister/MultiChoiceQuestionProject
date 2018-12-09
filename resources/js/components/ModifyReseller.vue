<template>
	<div>
		<hr>
		
		<div id="modal"class="modal is-active" v-if="showModal">
			<div class="modal-background"></div>
			<div class="modal-card">
				<header class="modal-card-head">
					<p class="modal-card-title">Modify Reseller</p>
					<button class="delete" aria-label="close" @click="closeModal()"></button>
				</header>
				<section class="modal-card-body">

					<form v-if="showform">

						<label> Name:</label>
						<input type="text" name="name" v-model="userName"> <br> <br>

						<label> Address:</label>
						<input type="text" name="name" v-model="address"> <br> <br>
						
						<label> Phone Number:</label>
						<input type="text" name="name" v-model="phone_number"> <br> <br>
						
						<label> Email:</label>
						<input type="text" name="name" v-model="email"> <br> <br>
						
						<label> PAN Card:</label>
						<input type="text" name="name" v-model="pan_card"> <br> <br>


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
					}
					
				});

				

				this.showform = true;
				this.showModal = true;			
			},
			closeModal(){

				this.showModal=false;
				this.showform = false;
			},
			
			

		}	
	}	
	

</script>	
