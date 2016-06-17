<?php

/* SonataAdminBundle:CRUD:base_acl.html.twig */
class __TwigTemplate_a8c9a8bc1b8a6f90ad4b9e19ae663b6e37ea6df5faf6b0f01bd3ff0f834a7efe extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:base_acl.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_59dda47b24e09b7921c00ddb9efda46819f5fc1839ba1e096d102880b3399705 = $this->env->getExtension("native_profiler");
        $__internal_59dda47b24e09b7921c00ddb9efda46819f5fc1839ba1e096d102880b3399705->enter($__internal_59dda47b24e09b7921c00ddb9efda46819f5fc1839ba1e096d102880b3399705_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_acl.html.twig"));

        // line 18
        $context["acl"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_acl_macro.html.twig", "SonataAdminBundle:CRUD:base_acl.html.twig", 18);
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_59dda47b24e09b7921c00ddb9efda46819f5fc1839ba1e096d102880b3399705->leave($__internal_59dda47b24e09b7921c00ddb9efda46819f5fc1839ba1e096d102880b3399705_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_1c25f85fe1d34443164e729d18c9d0a9e5cde0335b362e85315adeafb07b4dad = $this->env->getExtension("native_profiler");
        $__internal_1c25f85fe1d34443164e729d18c9d0a9e5cde0335b362e85315adeafb07b4dad->enter($__internal_1c25f85fe1d34443164e729d18c9d0a9e5cde0335b362e85315adeafb07b4dad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_acl.html.twig", 15)->display($context);
        
        $__internal_1c25f85fe1d34443164e729d18c9d0a9e5cde0335b362e85315adeafb07b4dad->leave($__internal_1c25f85fe1d34443164e729d18c9d0a9e5cde0335b362e85315adeafb07b4dad_prof);

    }

    // line 20
    public function block_form($context, array $blocks = array())
    {
        $__internal_d79f08464268038370773b132a5ae24fabed64068f3c7bf056f667d1736cfdeb = $this->env->getExtension("native_profiler");
        $__internal_d79f08464268038370773b132a5ae24fabed64068f3c7bf056f667d1736cfdeb->enter($__internal_d79f08464268038370773b132a5ae24fabed64068f3c7bf056f667d1736cfdeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 21
        echo "    ";
        $this->displayBlock('form_acl_roles', $context, $blocks);
        // line 24
        echo "    ";
        $this->displayBlock('form_acl_users', $context, $blocks);
        
        $__internal_d79f08464268038370773b132a5ae24fabed64068f3c7bf056f667d1736cfdeb->leave($__internal_d79f08464268038370773b132a5ae24fabed64068f3c7bf056f667d1736cfdeb_prof);

    }

    // line 21
    public function block_form_acl_roles($context, array $blocks = array())
    {
        $__internal_f35c233dbb24a07fe29229a8a788d1127c0bd7d8c8fdbae5901c05bf0da05c18 = $this->env->getExtension("native_profiler");
        $__internal_f35c233dbb24a07fe29229a8a788d1127c0bd7d8c8fdbae5901c05bf0da05c18->enter($__internal_f35c233dbb24a07fe29229a8a788d1127c0bd7d8c8fdbae5901c05bf0da05c18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_roles"));

        // line 22
        echo "        ";
        echo $context["acl"]->getrender_form((isset($context["aclRolesForm"]) ? $context["aclRolesForm"] : $this->getContext($context, "aclRolesForm")), (isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "td_role", (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_f35c233dbb24a07fe29229a8a788d1127c0bd7d8c8fdbae5901c05bf0da05c18->leave($__internal_f35c233dbb24a07fe29229a8a788d1127c0bd7d8c8fdbae5901c05bf0da05c18_prof);

    }

    // line 24
    public function block_form_acl_users($context, array $blocks = array())
    {
        $__internal_9bb5977986dd3147d80592d88ffc96d962d4410c7355c3bb13a56ce7eea3f13f = $this->env->getExtension("native_profiler");
        $__internal_9bb5977986dd3147d80592d88ffc96d962d4410c7355c3bb13a56ce7eea3f13f->enter($__internal_9bb5977986dd3147d80592d88ffc96d962d4410c7355c3bb13a56ce7eea3f13f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_users"));

        // line 25
        echo "        ";
        echo $context["acl"]->getrender_form((isset($context["aclUsersForm"]) ? $context["aclUsersForm"] : $this->getContext($context, "aclUsersForm")), (isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "td_username", (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_9bb5977986dd3147d80592d88ffc96d962d4410c7355c3bb13a56ce7eea3f13f->leave($__internal_9bb5977986dd3147d80592d88ffc96d962d4410c7355c3bb13a56ce7eea3f13f_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_acl.html.twig";
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
