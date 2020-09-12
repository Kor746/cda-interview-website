<template>
	<div>
		<div id="headwrap">
			<div id="titlelogo">
				<a v-bind:href="links[0].mainPage">				
					<div id="logo"><img src="css/vendor/rw_common/images/bemo-logo2.png" width="167" height="100" alt="Site logo"/></div>	
					<h1></h1>
				</a>
					<h2></h2>
			</div>

			<div class="dropdown">
				<div class="dropdown__header mwrap" @click="toggleDropdown($event)">
					<div class="lt"></div>
					<div class="lm"></div>
					<div class="lb"></div>
				</div>

				<div class="dropdown__content">
					<ul class="themenu">
						<li class="menuitem">
							<a v-bind:href="links[0].mainPage" rel="self">Main</a>
						</li>
						<li class="menuitem">
							<a v-bind:href="links[1].contactPage" rel="self">Contact Us</a>
						</li>
					</ul>
				</div>
			</div>

			
			<div id="nwrap">
				<div id="menuBtn"></div>
				<nav>
					<ul class="navigation">
						<li id="current">
							<a v-bind:href="links[0].mainPage" rel="self" id="current">Main</a>
						</li>
						<li>
							<a v-bind:href="links[1].contactPage" rel="self">Contact Us</a>
						</li>
					</ul>
				</nav>						
			</div>
		</div>

		<div class="banner video_banner">
			<div id="feature">
				<div id="extraContainer11">
					<div class="videoWrapper">			    
					</div>
				</div>		
				<div id="extraContainer1">
				</div>
				<div class="banner-text">
				</div>
				<div id="extraContainer9">
				</div>
			</div>		
		</div>										
	</div>
</template>

<script>
	export default {
		data() {
		    return {
		     	links: [
		     		{ mainPage: 'index' },
		     		{ contactPage: 'contact-us' }
		    	]
		    }
		},
		created() {
		    var scripts = [
		      	"/css/vendor/rw_common/themes/Endeavor/scripts/function.js",
	      		"/css/vendor/rw_common/themes/Endeavor/scripts/jquery.flexslider.js"
		    ];
		    scripts.forEach(script => {
		      let tag = document.createElement('script');
		      tag.setAttribute('src', script);
		      document.head.appendChild(tag);
		    });		    
		},
		methods: {
			toggleDropdown (event) {
				event.currentTarget.classList.toggle('is-active');
			}
		}
	}
</script>


<style lang="scss">
    .dropdown {
        &__header {
            cursor: pointer;
            line-height: 50px;
            padding-left: 10px;
            padding-right: 50px;
            position: relative;
            text-overflow: ellipsis;
            i.fa {
                position: absolute;
                right: 10px;
                top: 50%;
                transform: translateY(-50%);
                transition: opacity .3s;
                &.fa-angle-up {
                    opacity: 0;
                }
            }
            &.is-active {
                i.fa {
                    &.fa-angle-up {
                        opacity: 1;
                    }
                    &.fa-angle-down {
                        opacity: 0;
                    }
                }
                + .dropdown__content {
                    height: auto;
                    opacity: 1;
                    visibility: visible;
                }
            }
        }
        &__content {
            height: 0;
            opacity: 0;
            overflow: hidden;
            padding: 15px 10px;
            transition: opacity .3s;
            visibility: hidden;
        }
    }
</style>





