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
        $__internal_fe37a246403bf8e29aeef697fcef9089b20ab89a7caffcc2331cd05dc3fa9cef = $this->env->getExtension("native_profiler");
        $__internal_fe37a246403bf8e29aeef697fcef9089b20ab89a7caffcc2331cd05dc3fa9cef->enter($__internal_fe37a246403bf8e29aeef697fcef9089b20ab89a7caffcc2331cd05dc3fa9cef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_acl.html.twig"));

        // line 18
        $context["acl"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_acl_macro.html.twig", "SonataAdminBundle:CRUD:base_acl.html.twig", 18);
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fe37a246403bf8e29aeef697fcef9089b20ab89a7caffcc2331cd05dc3fa9cef->leave($__internal_fe37a246403bf8e29aeef697fcef9089b20ab89a7caffcc2331cd05dc3fa9cef_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_c41a82f395786a5c2cd2d3c70442e0d9c5610362ccc3a87696e5c7bec5fb266a = $this->env->getExtension("native_profiler");
        $__internal_c41a82f395786a5c2cd2d3c70442e0d9c5610362ccc3a87696e5c7bec5fb266a->enter($__internal_c41a82f395786a5c2cd2d3c70442e0d9c5610362ccc3a87696e5c7bec5fb266a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_acl.html.twig", 15)->display($context);
        
        $__internal_c41a82f395786a5c2cd2d3c70442e0d9c5610362ccc3a87696e5c7bec5fb266a->leave($__internal_c41a82f395786a5c2cd2d3c70442e0d9c5610362ccc3a87696e5c7bec5fb266a_prof);

    }

    // line 20
    public function block_form($context, array $blocks = array())
    {
        $__internal_a83729cdd8b8aa997473f0cffb459e62b08f2da9cdff643684001862234537da = $this->env->getExtension("native_profiler");
        $__internal_a83729cdd8b8aa997473f0cffb459e62b08f2da9cdff643684001862234537da->enter($__internal_a83729cdd8b8aa997473f0cffb459e62b08f2da9cdff643684001862234537da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 21
        echo "    ";
        $this->displayBlock('form_acl_roles', $context, $blocks);
        // line 24
        echo "    ";
        $this->displayBlock('form_acl_users', $context, $blocks);
        
        $__internal_a83729cdd8b8aa997473f0cffb459e62b08f2da9cdff643684001862234537da->leave($__internal_a83729cdd8b8aa997473f0cffb459e62b08f2da9cdff643684001862234537da_prof);

    }

    // line 21
    public function block_form_acl_roles($context, array $blocks = array())
    {
        $__internal_167d5bd96b4d088d340be7130e05d9b22445298cabaacd4b7959c9fe3052d53e = $this->env->getExtension("native_profiler");
        $__internal_167d5bd96b4d088d340be7130e05d9b22445298cabaacd4b7959c9fe3052d53e->enter($__internal_167d5bd96b4d088d340be7130e05d9b22445298cabaacd4b7959c9fe3052d53e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_roles"));

        // line 22
        echo "        ";
        echo $context["acl"]->getrender_form((isset($context["aclRolesForm"]) ? $context["aclRolesForm"] : $this->getContext($context, "aclRolesForm")), (isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "td_role", (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_167d5bd96b4d088d340be7130e05d9b22445298cabaacd4b7959c9fe3052d53e->leave($__internal_167d5bd96b4d088d340be7130e05d9b22445298cabaacd4b7959c9fe3052d53e_prof);

    }

    // line 24
    public function block_form_acl_users($context, array $blocks = array())
    {
        $__internal_e762328bda399f2269fd8173db1dd78919468405369d3bb50a7a6faf4ca4c796 = $this->env->getExtension("native_profiler");
        $__internal_e762328bda399f2269fd8173db1dd78919468405369d3bb50a7a6faf4ca4c796->enter($__internal_e762328bda399f2269fd8173db1dd78919468405369d3bb50a7a6faf4ca4c796_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_users"));

        // line 25
        echo "        ";
        echo $context["acl"]->getrender_form((isset($context["aclUsersForm"]) ? $context["aclUsersForm"] : $this->getContext($context, "aclUsersForm")), (isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "td_username", (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_e762328bda399f2269fd8173db1dd78919468405369d3bb50a7a6faf4ca4c796->leave($__internal_e762328bda399f2269fd8173db1dd78919468405369d3bb50a7a6faf4ca4c796_prof);

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
