<template>
	<div>
		<div>
			<h1>
				<a @click="sayhi()" > Hello World </a>
			</h1>			
				
		</div> 

	</div>

</template>

<script>
	
	export default{
		props:{
			reseller:Array

		},

		methods:{

			sayhi(){

				alert("hi");
			}
		}	
	}	
	

</script>	
