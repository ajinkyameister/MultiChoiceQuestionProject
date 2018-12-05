<template>
	<div>
		<div>
			{{-- <h1>
				<a @click="sayhi()" > Hello World </a>
			</h1>	 --}}
			<hr>
			<form v-if="showform">
				
				<input type="text" name="name" v-model="userName">
				<input type="text" name="name" v-model="address">
				<input type="text" name="name" v-model="phone_number">
				<input type="text" name="name" v-model="email">
				<input type="text" name="name" v-model="pan_card">
				
			</form>		
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
			}
		}	
	}	
	

</script>	
