"use strict";(self.webpackChunk=self.webpackChunk||[]).push([[457],{23561:function(t,e,a){var o=a(64151),s=a(30337),n=a(9090),l=a(71128),i=a(83544),c=a(15160),r=a(20035),m=a(33684),u=a(49231),h=a(52278),d=a(34517),p=a(47842),x=a(86591),j=a(33357),_=a(20360),f=a(20264);function w(t){let{showModal:e,setShowModal:a}=t;return e?(0,f.jsx)(j.ZG,{onRequestClose:()=>{a(!1)},tracking:{utm_medium:"upsell_modal",utm_campaign:"create_automation_from_scratch"},children:(0,s.__)("You cannot create automation from scratch.","mailpoet")}):null}function k(t,e){d.Hooks.applyFilters("mailpoet.automation.templates.from_scratch_button",(()=>{t()}))(e)}function C(){const[t,e]=(0,u.useState)(!1),[a,o]=(0,u.useState)(null),n=(0,u.useCallback)((()=>{k((()=>{e(!0)}),o)}),[]);return(0,f.jsxs)(f.Fragment,{children:[a&&(0,f.jsx)(_.q,{type:"error",closable:!0,timeout:!1,children:(0,f.jsx)("p",{children:a})}),(0,f.jsx)(h.Z,{variant:"secondary",onClick:()=>n(),children:(0,s.__)("From scratch","mailpoet")}),(0,f.jsx)(w,{showModal:t,setShowModal:e})]})}function g(){const[t,e]=(0,u.useState)(!1),[a,o]=(0,u.useState)(null),n=(0,u.useCallback)((()=>{k((()=>{e(!0)}),o)}),[]);return(0,f.jsxs)("li",{className:"mailpoet-automation-template-list-item mailpoet-automation-from-scratch",children:[a&&(0,f.jsx)(_.q,{type:"error",closable:!0,timeout:!1,children:(0,f.jsx)("p",{children:a})}),(0,f.jsxs)(h.Z,{onClick:()=>n(),children:[(0,f.jsx)(p.Z,{width:"50px",height:"50px",icon:x.Z}),(0,s.__)("Create from scratch","mailpoet")]}),(0,f.jsx)(w,{showModal:t,setShowModal:e})]})}function b(){return(0,f.jsxs)(f.Fragment,{children:[(0,f.jsx)(m.Q,{}),(0,f.jsxs)(n.Z,{className:"mailpoet-automation-templates-heading",children:[(0,f.jsx)("h1",{className:"wp-heading-inline",children:(0,s.__)("Choose your automation template","mailpoet")}),(0,f.jsx)(C,{})]}),(0,f.jsxs)("ul",{className:"mailpoet-automation-templates",children:[l.U.map((t=>(0,f.jsx)(i.v,{template:t},t.slug))),(0,f.jsx)(g,{})]})]})}window.addEventListener("DOMContentLoaded",(()=>{const t=document.getElementById("mailpoet_automation_templates");t&&((0,r.P)(),(0,c.q)(),o.render((0,f.jsx)(b,{}),t))}))},65311:function(t){t.exports=jQuery}},function(t){t.O(0,[351],(function(){return 23561,t(t.s=23561)})),t.O()}]);