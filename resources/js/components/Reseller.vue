<template>

	<div>
		<a class="button is-link is-rounded" @click="openModal()">Add Seller</a> <br> <br>
		


		<div id="modal"class="modal is-active" v-if="showModal">
			<div class="modal-background"></div>
			<div class="modal-card">
				<header class="modal-card-head">
					<p class="modal-card-title">Modal title</p>
					<button class="delete" aria-label="close" @click="closeModal()"></button>
				</header>
				<section class="modal-card-body">

					<form method="POST" action="/resellers" @submit="formSubmit">
						
						<input type="hidden" name="_token" :value="csrf">

						<label> Name:</label>
						<input id="name"type="text" name="name"  v-model="name"> <br> <br>		

						<label> Phone Number:</label>
						<input id="phoneNumber"type="integer" name="phone_number" v-model="phone_number"> <br> <br>

						<label> Address:</label>
						<input id="address"type="text" name="address"  v-model="address"> <br> <br>

						<label> Pan Card Details:</label>
						<input id="panCard"type="text" name="pan_card"  v-model="pan_card"> <br> <br>

						<label> Email:</label>
						<input id="email"type="email" name="email" v-model="email"> <br> <br>

						<label> Password:</label>
						<input id="password"type="password" name="password" v-model="password"> <br> <br>

						<footer class="modal-card-foot">
							<button type="submit" class="button is-success" >Save changes</button>
							<button class="button" @click="closeModal()">Cancel</button>
						</footer>

					</form>	
				</section>	
			</div>

		</div>

			</div>
</template>


<script >
	
	export default{

		props:{
			user:{

				type:Object
			}

		},

		data:function(){
				return {
					showModal:false,
					'name':"",
					'phone_number':"",
					'address':"",
					'pan_card':"",
					'email':"",
					'password':"",

					csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
					
				}
			},


		mounted(){

			console.log('My Reseller component is mounted after great deal of effort');
		},

		methods:{

			formSubmit(){
					
					axios.post('/resellers',{

						'name':this.name,
						'phone_number':this.phone_number,
						'address':this.address,
						'pan_card':this.pan_card

					});

					this.closeModal();

			},

			closeModal(){

				this.showModal=false;
			},
			
			openModal(){

				this.showModal=true;

			},
			

			
		}

	}

</script>
