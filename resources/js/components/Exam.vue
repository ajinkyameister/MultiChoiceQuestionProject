<template>

	<div>
		<a class="button is-link is-rounded" @click="openModal()">Add Exam</a> <br> <br>
		


		<div id="modal"class="modal is-active" v-if="showModal">

			<div class="modal-background"></div>

			<div class="modal-card">

				<header class="modal-card-head">
					<p class="modal-card-title">Create Exam</p>

					<button class="delete" aria-label="close" @click="closeModal()"></button>
				</header>

				<section class="modal-card-body">

					<form method="POST" action="/exams" @submit="formSubmit">
						
					<input type="hidden" name="_token" :value="csrf">

					<label> Standard:</label>
					<input id="name"type="text" name="name"  v-model="name"> <br> <br>		

					<label> Exam Name:</label>
					<input id="exam_name" type="text" name="exam_name"> <br> <br>		

					<label> id:</label>
					<input id="standard_id" type="text" name="standard_id" v-model="standardId" :disabled ="true"> 
					<br><br>

					<input id="standard_id" type="hidden" name="standard_id" v-model="standardId"> 

					<footer class="modal-card-foot">
						<button type="submit" class="button is-success" >Save changes</button>
						<button class="button" @click="closeModal()">Cancel</button>
					</footer>

					</form>	
				</section>	
			</div>

		</div>

		<li v-for="onestandard in standard" >

			<a @click="selectStandard(onestandard)"> {{onestandard.name}} </a>

		</li>	

	</div>
</template>


<script >
	
	export default{

		props:{
			standard:{

				type:Array
			}

		},

		data:function(){
			return {
				showModal:false,
				'name':"",	
				'standardId':"",
				
				csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),

			}
		},


		mounted(){

			console.log('My Institute component is mounted after great deal of effort');
		},

		methods:{

			selectStandard(selectedStandard){

				this.standard.forEach(names=>{

					if(selectedStandard.name == names.name){

						this.standardId = selectedStandard.id;
						this.name = selectedStandard.name;

					}

				});

				this.openModal();
			},

			formSubmit(){

				axios.post('/exams',{
					
					'name':this.name,

					// 'standard_id':this.standardId

					'standard_id':this.standardId				

				}).then(response=>console.log(response.data));

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
