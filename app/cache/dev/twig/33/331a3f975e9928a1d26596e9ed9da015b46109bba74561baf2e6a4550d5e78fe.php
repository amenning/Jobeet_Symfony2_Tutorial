<?php

/* @SonataAdmin/CRUD/base_acl.html.twig */
class __TwigTemplate_a1c0ab2c2798037aa598480ecdc2f86e0b81beb311bd0cb66040b3db69211ab2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'form' => array($this, 'block_form'),
            'form_acl_roles' => array($this, 'block_form_acl_roles'),
            'form_acl_users' => array($this, 'block_form_acl_users'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "@SonataAdmin/CRUD/base_acl.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_071c885e43c17cc38ce628cae484e4096e0b075117cb19c59926e236a909b20f = $this->env->getExtension("native_profiler");
        $__internal_071c885e43c17cc38ce628cae484e4096e0b075117cb19c59926e236a909b20f->enter($__internal_071c885e43c17cc38ce628cae484e4096e0b075117cb19c59926e236a909b20f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_acl.html.twig"));

        // line 18
        $context["acl"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_acl_macro.html.twig", "@SonataAdmin/CRUD/base_acl.html.twig", 18);
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_071c885e43c17cc38ce628cae484e4096e0b075117cb19c59926e236a909b20f->leave($__internal_071c885e43c17cc38ce628cae484e4096e0b075117cb19c59926e236a909b20f_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_165d371cdafb50c2234eb4f3f60cc899d4933657f15bc8326dfb80c71eb4d4fc = $this->env->getExtension("native_profiler");
        $__internal_165d371cdafb50c2234eb4f3f60cc899d4933657f15bc8326dfb80c71eb4d4fc->enter($__internal_165d371cdafb50c2234eb4f3f60cc899d4933657f15bc8326dfb80c71eb4d4fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "@SonataAdmin/CRUD/base_acl.html.twig", 15)->display($context);
        
        $__internal_165d371cdafb50c2234eb4f3f60cc899d4933657f15bc8326dfb80c71eb4d4fc->leave($__internal_165d371cdafb50c2234eb4f3f60cc899d4933657f15bc8326dfb80c71eb4d4fc_prof);

    }

    // line 20
    public function block_form($context, array $blocks = array())
    {
        $__internal_1343037b7b438d294823b7a2612631c8a5808c0bca07cdd4e7ee1fa410a9755c = $this->env->getExtension("native_profiler");
        $__internal_1343037b7b438d294823b7a2612631c8a5808c0bca07cdd4e7ee1fa410a9755c->enter($__internal_1343037b7b438d294823b7a2612631c8a5808c0bca07cdd4e7ee1fa410a9755c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 21
        echo "    ";
        $this->displayBlock('form_acl_roles', $context, $blocks);
        // line 24
        echo "    ";
        $this->displayBlock('form_acl_users', $context, $blocks);
        
        $__internal_1343037b7b438d294823b7a2612631c8a5808c0bca07cdd4e7ee1fa410a9755c->leave($__internal_1343037b7b438d294823b7a2612631c8a5808c0bca07cdd4e7ee1fa410a9755c_prof);

    }

    // line 21
    public function block_form_acl_roles($context, array $blocks = array())
    {
        $__internal_0932251f28beada843b62962454b9ee0ccf46fff3777573e98c62dfcc8b8a40a = $this->env->getExtension("native_profiler");
        $__internal_0932251f28beada843b62962454b9ee0ccf46fff3777573e98c62dfcc8b8a40a->enter($__internal_0932251f28beada843b62962454b9ee0ccf46fff3777573e98c62dfcc8b8a40a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_roles"));

        // line 22
        echo "        ";
        echo $context["acl"]->getrender_form((isset($context["aclRolesForm"]) ? $context["aclRolesForm"] : $this->getContext($context, "aclRolesForm")), (isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "td_role", (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_0932251f28beada843b62962454b9ee0ccf46fff3777573e98c62dfcc8b8a40a->leave($__internal_0932251f28beada843b62962454b9ee0ccf46fff3777573e98c62dfcc8b8a40a_prof);

    }

    // line 24
    public function block_form_acl_users($context, array $blocks = array())
    {
        $__internal_1ceed76c404a095867499e138d87dc7f0e31b459133062d2febae370f28fce89 = $this->env->getExtension("native_profiler");
        $__internal_1ceed76c404a095867499e138d87dc7f0e31b459133062d2febae370f28fce89->enter($__internal_1ceed76c404a095867499e138d87dc7f0e31b459133062d2febae370f28fce89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_users"));

        // line 25
        echo "        ";
        echo $context["acl"]->getrender_form((isset($context["aclUsersForm"]) ? $context["aclUsersForm"] : $this->getContext($context, "aclUsersForm")), (isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "td_username", (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_1ceed76c404a095867499e138d87dc7f0e31b459133062d2febae370f28fce89->leave($__internal_1ceed76c404a095867499e138d87dc7f0e31b459133062d2febae370f28fce89_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/base_acl.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 25,  86 => 24,  76 => 22,  70 => 21,  62 => 24,  59 => 21,  53 => 20,  45 => 15,  39 => 14,  32 => 12,  30 => 18,  21 => 12,);
    }
}
/* {#*/
/* */
/* This file is part of the Sonata package.*/
/* */
/* (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>*/
/* */
/* For the full copyright and license information, please view the LICENSE*/
/* file that was distributed with this source code.*/
/* */
/* #}*/
/* */
/* {% extends base_template %}*/
/* */
/* {% block actions %}*/
/*     {% include 'SonataAdminBundle:CRUD:action_buttons.html.twig' %}*/
/* {% endblock %}*/
/* */
/* {% import 'SonataAdminBundle:CRUD:base_acl_macro.html.twig' as acl %}*/
/* */
/* {% block form %}*/
/*     {% block form_acl_roles %}*/
/*         {{ acl.render_form(aclRolesForm, permissions, 'td_role', admin, sonata_admin.adminPool, object) }}*/
/*     {% endblock %}*/
/*     {% block form_acl_users %}*/
/*         {{ acl.render_form(aclUsersForm, permissions, 'td_username', admin, sonata_admin.adminPool, object) }}*/
/*     {% endblock %}*/
/* {% endblock %}*/
/* */
