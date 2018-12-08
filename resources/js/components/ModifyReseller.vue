<template>
	<div>
		<div>
			{{-- <h1>
				<a @click="sayhi()" > Hello World </a>
			</h1>	 --}}
			<hr>

			<div id="modal"class="modal is-active" v-if="showform">
				<div class="modal-background"></div>
				<div class="modal-card">
					<header class="modal-card-head">
						<p class="modal-card-title">Modal title</p>
					</header>

					<section class="modal-card-body">


						<form v-if="showform">
							<label color="white"> Name:</label>
							<input type="text" name="name" v-model="userName"> <br><br>

							<label> address:</label>
							<input type="text" name="name" v-model="address"> <br><br>

							<label> phone_number:</label>
							<input type="text" name="name" v-model="phone_number">
							
							<label> Email:</label>
							<input type="text" name="name" v-model="email"><br><br>
							
							<label> pan Card:</label>
							<input type="text" name="name" v-model="pan_card"><br><br>


							<footer class="modal-card-foot">
								<button type="submit" class="button is-success" >Save changes</button>
								<button class="button" @click="closeModal()">Cancel</button>
							</footer>
							
						</form>

						</section

					</div>
					<button class="modal-close is-large" aria-label="close" @click="closeModal()"></button>
				</div>		

			</div>

			<li v-for="onereseller in reseller"> 
				
				<a @click="sayhi(onereseller)"> {{onereseller.name}} </a> 

			</li>


		</div> 

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
				userName:"",
				address:"",
				phone_number:"",
				email:"",
				pan_card:""
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

				// console.log(userName);	
				this.showform = true;			
			},

			closeModal(){

				this.showform = false;
			}
		}	
	}	
	

</script>	
