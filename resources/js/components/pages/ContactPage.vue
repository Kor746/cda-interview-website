<template>
	<div>
		<div class="clear"></div>
			<div id="container">
				<div id="extraContainer7"></div>
				<div id="extraContainer8"></div>
				<section>
					<div id="padding">
						<div class="message-text">
							<span style="font-size:17px; font-weight:bold; ">BeMo Academic Consulting Inc. </span><br />
							<span>
								<span style="font-size:13px; font-weight:bold; "><u>Toll Free</u>
								</span>
								<span style="font-size:13px; ">: </span>
								<span style="font-size:14px; ">1-855-900-BeMo (2366)</span>
								<span style="font-size:13px; "><br /></span>
								<span style="font-size:13px; font-weight:bold; "><u>Email</u></span>
								<span style="font-size:13px; ">: </span>
								<span style="font-size:14px; ">
									<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="d0b9beb6bf90b2b5bdbfb1b3b1b4b5bdb9b3b3bfbea3a5bca4b9beb7feb3bfbd">[email&#160;protected]</a>
								</span>
							</span>
						</div><br />

						<form @submit.prevent="submit">
							 <div>
								<label>Name:</label> *<br />
								<input class="form-input-field" type="text" value="" name="name" id="name" v-models="fields.name" size="40"/><br /><br />

								<label>Email Address:</label> *<br />
								<input class="form-input-field" type="text" value="" name="email" id="email" v-models="fields.email" size="40"/><br /><br />

								<label>How can we help you?</label> *<br />
								<textarea class="form-input-field" name="message" id="message" v-models="fields.message" rows="8" cols="38"></textarea><br /><br />

								<div style="display: none;">
									<label>Spam Protection: Please don't fill this in:</label>
									<textarea name="comment" rows="1" cols="1"></textarea>
								</div>
								<input type="hidden" name="form_token" value="10711326375f5c017a9718c" />
								<input class="form-input-button" type="reset" name="resetButton" value="Reset" />
								<input class="form-input-button" type="submit" name="submitButton" value="Submit" />
							</div>
						</form>

					<br />
					<div class="form-footer">
						<span style="font-size:15px; font-weight:bold; "><u>Note</u></span>
						<span style="font-size:15px; ">: If you are having difficulties with our contact us form above, send us an email to <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="bed7d0d8d1fedcdbd3d1dfdddfdadbd3d7ddddd1d0cdcbd2cad7d0d990ddd1d3">[email&#160;protected]</a> (copy & paste the email address)</span>
						<span style="font-size:13px; "><br /></span>
					</div><br />
				</div>
			</section>
		</div>
	</div>
</template>


<script>
	export default {
	  data() {
	    return {
	      fields: {},
	      errors: {},
	    }
	  },
	  methods: {
	    submit() {
	      this.errors = {};
	      axios.post('/submit', this.fields).then(response => {
	        alert('Message sent!');
	      }).catch(error => {
	        if (error.response.status === 422) {
	          this.errors = error.response.data.errors || {};
	        }
	      });
	    },
	  },
	}
</script>