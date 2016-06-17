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
        $__internal_ed09378b97744980af7a32a4d706a0ff60146b741658a3e13c8ee56ca6581646 = $this->env->getExtension("native_profiler");
        $__internal_ed09378b97744980af7a32a4d706a0ff60146b741658a3e13c8ee56ca6581646->enter($__internal_ed09378b97744980af7a32a4d706a0ff60146b741658a3e13c8ee56ca6581646_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_acl.html.twig"));

        // line 18
        $context["acl"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_acl_macro.html.twig", "SonataAdminBundle:CRUD:base_acl.html.twig", 18);
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ed09378b97744980af7a32a4d706a0ff60146b741658a3e13c8ee56ca6581646->leave($__internal_ed09378b97744980af7a32a4d706a0ff60146b741658a3e13c8ee56ca6581646_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_e14b203ecbcf8d6d78ce65656d27b8e8cea53cff1606a27748fd0f1ca0dde16b = $this->env->getExtension("native_profiler");
        $__internal_e14b203ecbcf8d6d78ce65656d27b8e8cea53cff1606a27748fd0f1ca0dde16b->enter($__internal_e14b203ecbcf8d6d78ce65656d27b8e8cea53cff1606a27748fd0f1ca0dde16b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_acl.html.twig", 15)->display($context);
        
        $__internal_e14b203ecbcf8d6d78ce65656d27b8e8cea53cff1606a27748fd0f1ca0dde16b->leave($__internal_e14b203ecbcf8d6d78ce65656d27b8e8cea53cff1606a27748fd0f1ca0dde16b_prof);

    }

    // line 20
    public function block_form($context, array $blocks = array())
    {
        $__internal_88d8d0cee4525fabee231f5f2165593ab27821a127d90ee73295b95cbc07b1f9 = $this->env->getExtension("native_profiler");
        $__internal_88d8d0cee4525fabee231f5f2165593ab27821a127d90ee73295b95cbc07b1f9->enter($__internal_88d8d0cee4525fabee231f5f2165593ab27821a127d90ee73295b95cbc07b1f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 21
        echo "    ";
        $this->displayBlock('form_acl_roles', $context, $blocks);
        // line 24
        echo "    ";
        $this->displayBlock('form_acl_users', $context, $blocks);
        
        $__internal_88d8d0cee4525fabee231f5f2165593ab27821a127d90ee73295b95cbc07b1f9->leave($__internal_88d8d0cee4525fabee231f5f2165593ab27821a127d90ee73295b95cbc07b1f9_prof);

    }

    // line 21
    public function block_form_acl_roles($context, array $blocks = array())
    {
        $__internal_d4d757d36c9a0ccb5faf042d7c8378a8455cc511e754a6b2a86ebd50da2dbd27 = $this->env->getExtension("native_profiler");
        $__internal_d4d757d36c9a0ccb5faf042d7c8378a8455cc511e754a6b2a86ebd50da2dbd27->enter($__internal_d4d757d36c9a0ccb5faf042d7c8378a8455cc511e754a6b2a86ebd50da2dbd27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_roles"));

        // line 22
        echo "        ";
        echo $context["acl"]->getrender_form((isset($context["aclRolesForm"]) ? $context["aclRolesForm"] : $this->getContext($context, "aclRolesForm")), (isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "td_role", (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_d4d757d36c9a0ccb5faf042d7c8378a8455cc511e754a6b2a86ebd50da2dbd27->leave($__internal_d4d757d36c9a0ccb5faf042d7c8378a8455cc511e754a6b2a86ebd50da2dbd27_prof);

    }

    // line 24
    public function block_form_acl_users($context, array $blocks = array())
    {
        $__internal_f6f03436e931a78256b9748f7e3ed21f09cf1228db32465663be49ddf7f9ee6d = $this->env->getExtension("native_profiler");
        $__internal_f6f03436e931a78256b9748f7e3ed21f09cf1228db32465663be49ddf7f9ee6d->enter($__internal_f6f03436e931a78256b9748f7e3ed21f09cf1228db32465663be49ddf7f9ee6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_users"));

        // line 25
        echo "        ";
        echo $context["acl"]->getrender_form((isset($context["aclUsersForm"]) ? $context["aclUsersForm"] : $this->getContext($context, "aclUsersForm")), (isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "td_username", (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_f6f03436e931a78256b9748f7e3ed21f09cf1228db32465663be49ddf7f9ee6d->leave($__internal_f6f03436e931a78256b9748f7e3ed21f09cf1228db32465663be49ddf7f9ee6d_prof);

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
