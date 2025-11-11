/*!
 * HTML Template Name: Quanto - Creative Agency Template
 * Developer Name: Sakebul Islam
 * Developer Website: https://sakebul.com
 */(function(i){var r=function(e,t){return this.$el=i(e),this.cb=t,this.watch(),this};r.prototype={isIn:function(){var t=this,n=i(window),o=t.$el.offset().top,a=o+t.$el.outerHeight(),s=n.scrollTop(),l=s+n.height();return a>s&&o<l},watch:function(){var e=this,t=!1;i(window).on("resize scroll",function(){e.isIn()&&t===!1&&(e.cb.call(e.$el,"entered"),t=!0),t===!0&&!e.isIn()&&(e.cb.call(e.$el,"leaved"),t=!1)})}},i.fn.isInViewport=function(e){return this.each(function(){var t=i(this),n=t.data("isInViewport");n||t.data("isInViewport",new r(this,e))})}})(window.jQuery);
