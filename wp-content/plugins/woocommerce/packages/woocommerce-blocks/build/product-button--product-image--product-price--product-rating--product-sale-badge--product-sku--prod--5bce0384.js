(window.webpackWcBlocksJsonp=window.webpackWcBlocksJsonp||[]).push([[2],{89:function(o,t,l){"use strict";l.d(t,"a",(function(){return d}));var e=l(4),n=l.n(e),r=l(21),s=l(108),c=l(611),a=l(124);function i(){let o=arguments.length>0&&void 0!==arguments[0]?arguments[0]:{};const t={};return Object(a.getCSSRules)(o,{selector:""}).forEach(o=>{t[o.key]=o.value}),t}function u(o,t){return o&&t?`has-${Object(c.a)(t)}-${o}`:""}const d=o=>{const t=(o=>{const t=Object(r.b)(o)?o:{style:{}};let l=t.style;return Object(s.a)(l)&&(l=JSON.parse(l)||{}),Object(r.b)(l)||(l={}),{...t,style:l}})(o),l=function(o){var t,l,e,s,c,a,d;const{backgroundColor:v,textColor:y,gradient:f,style:b}=o,g=u("background-color",v),m=u("color",y),h=function(o){if(o)return`has-${o}-gradient-background`}(f),p=h||(null==b||null===(t=b.color)||void 0===t?void 0:t.gradient);return{className:n()(m,h,{[g]:!p&&!!g,"has-text-color":y||(null==b||null===(l=b.color)||void 0===l?void 0:l.text),"has-background":v||(null==b||null===(e=b.color)||void 0===e?void 0:e.background)||f||(null==b||null===(s=b.color)||void 0===s?void 0:s.gradient),"has-link-color":Object(r.b)(null==b||null===(c=b.elements)||void 0===c?void 0:c.link)?null==b||null===(a=b.elements)||void 0===a||null===(d=a.link)||void 0===d?void 0:d.color:void 0}),style:i({color:(null==b?void 0:b.color)||{}})}}(t),e=function(o){var t;const l=(null===(t=o.style)||void 0===t?void 0:t.border)||{};return{className:function(o){var t;const{borderColor:l,style:e}=o,r=l?u("border-color",l):"";return n()({"has-border-color":l||(null==e||null===(t=e.border)||void 0===t?void 0:t.color),borderColorClass:r})}(o),style:i({border:l})}}(t),c=function(o){var t;return{className:void 0,style:i({spacing:(null===(t=o.style)||void 0===t?void 0:t.spacing)||{}})}}(t),a=(o=>{const t=Object(r.b)(o.style.typography)?o.style.typography:{},l=Object(s.a)(t.fontFamily)?t.fontFamily:"";return{className:o.fontFamily?`has-${o.fontFamily}-font-family`:l,style:{fontSize:o.fontSize?`var(--wp--preset--font-size--${o.fontSize})`:t.fontSize,fontStyle:t.fontStyle,fontWeight:t.fontWeight,letterSpacing:t.letterSpacing,lineHeight:t.lineHeight,textDecoration:t.textDecoration,textTransform:t.textTransform}}})(t);return{className:n()(a.className,l.className,e.className,c.className),style:{...a.style,...l.style,...e.style,...c.style}}}}}]);