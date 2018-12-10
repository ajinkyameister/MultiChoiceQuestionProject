<template>

	<div>
		<a class="button is-link is-rounded" @click="openModal()">Add Standard</a> <br> <br>
		


		<div id="modal"class="modal is-active" v-if="showModal">

			<div class="modal-background"></div>

			<div class="modal-card">

				<header class="modal-card-head">
					<p class="modal-card-title">Add Standard</p>

					<button class="delete" aria-label="close" @click="closeModal()"></button>
				</header>

				<section class="modal-card-body">

					<form method="POST" action="/standards" @submit="formSubmit">
						
						<input type="hidden" name="_token" :value="csrf">

						<label> Name:</label>
						<input id="name"type="text" name="name"  v-model="name"> <br> <br>		

						

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
			// standards:{

			// 	type:Object
			// }

		},

		data:function(){
				return {
					showModal:false,
					'name':"",			

					csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
					
				}
			},


		mounted(){

			console.log('My Institute component is mounted after great deal of effort');
		},

		methods:{

			formSubmit(){

				
					axios.post('/standards',{

						'name':this.name,
						

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
