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
        $__internal_b4a960b15c5f2cbafeb137a1883c81d0883f789bdcfdb816991e7ab728d63b09 = $this->env->getExtension("native_profiler");
        $__internal_b4a960b15c5f2cbafeb137a1883c81d0883f789bdcfdb816991e7ab728d63b09->enter($__internal_b4a960b15c5f2cbafeb137a1883c81d0883f789bdcfdb816991e7ab728d63b09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_acl.html.twig"));

        // line 18
        $context["acl"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_acl_macro.html.twig", "@SonataAdmin/CRUD/base_acl.html.twig", 18);
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b4a960b15c5f2cbafeb137a1883c81d0883f789bdcfdb816991e7ab728d63b09->leave($__internal_b4a960b15c5f2cbafeb137a1883c81d0883f789bdcfdb816991e7ab728d63b09_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_23fb9fdf62e798faf255a18900aa228a30be9ead916c402868c97fc752e76ddc = $this->env->getExtension("native_profiler");
        $__internal_23fb9fdf62e798faf255a18900aa228a30be9ead916c402868c97fc752e76ddc->enter($__internal_23fb9fdf62e798faf255a18900aa228a30be9ead916c402868c97fc752e76ddc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "@SonataAdmin/CRUD/base_acl.html.twig", 15)->display($context);
        
        $__internal_23fb9fdf62e798faf255a18900aa228a30be9ead916c402868c97fc752e76ddc->leave($__internal_23fb9fdf62e798faf255a18900aa228a30be9ead916c402868c97fc752e76ddc_prof);

    }

    // line 20
    public function block_form($context, array $blocks = array())
    {
        $__internal_384833189bcb2f40d03220e41051cf1d0ad5d51cb02ca1a21433379bb43b8c14 = $this->env->getExtension("native_profiler");
        $__internal_384833189bcb2f40d03220e41051cf1d0ad5d51cb02ca1a21433379bb43b8c14->enter($__internal_384833189bcb2f40d03220e41051cf1d0ad5d51cb02ca1a21433379bb43b8c14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 21
        echo "    ";
        $this->displayBlock('form_acl_roles', $context, $blocks);
        // line 24
        echo "    ";
        $this->displayBlock('form_acl_users', $context, $blocks);
        
        $__internal_384833189bcb2f40d03220e41051cf1d0ad5d51cb02ca1a21433379bb43b8c14->leave($__internal_384833189bcb2f40d03220e41051cf1d0ad5d51cb02ca1a21433379bb43b8c14_prof);

    }

    // line 21
    public function block_form_acl_roles($context, array $blocks = array())
    {
        $__internal_7c4d7126c2db0259438f590579ce385ad2e00bb9de23f04b84507288f66c1a5e = $this->env->getExtension("native_profiler");
        $__internal_7c4d7126c2db0259438f590579ce385ad2e00bb9de23f04b84507288f66c1a5e->enter($__internal_7c4d7126c2db0259438f590579ce385ad2e00bb9de23f04b84507288f66c1a5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_roles"));

        // line 22
        echo "        ";
        echo $context["acl"]->getrender_form((isset($context["aclRolesForm"]) ? $context["aclRolesForm"] : $this->getContext($context, "aclRolesForm")), (isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "td_role", (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_7c4d7126c2db0259438f590579ce385ad2e00bb9de23f04b84507288f66c1a5e->leave($__internal_7c4d7126c2db0259438f590579ce385ad2e00bb9de23f04b84507288f66c1a5e_prof);

    }

    // line 24
    public function block_form_acl_users($context, array $blocks = array())
    {
        $__internal_9e4340031945214b2ff257bf2b6cca5f31fd5609f9dd04cfb63dcc81600cdf71 = $this->env->getExtension("native_profiler");
        $__internal_9e4340031945214b2ff257bf2b6cca5f31fd5609f9dd04cfb63dcc81600cdf71->enter($__internal_9e4340031945214b2ff257bf2b6cca5f31fd5609f9dd04cfb63dcc81600cdf71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_users"));

        // line 25
        echo "        ";
        echo $context["acl"]->getrender_form((isset($context["aclUsersForm"]) ? $context["aclUsersForm"] : $this->getContext($context, "aclUsersForm")), (isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "td_username", (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_9e4340031945214b2ff257bf2b6cca5f31fd5609f9dd04cfb63dcc81600cdf71->leave($__internal_9e4340031945214b2ff257bf2b6cca5f31fd5609f9dd04cfb63dcc81600cdf71_prof);

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
