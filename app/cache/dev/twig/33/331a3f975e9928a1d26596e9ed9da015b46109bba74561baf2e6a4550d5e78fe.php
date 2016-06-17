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
        $__internal_2d403e6d25badea0d1f26ba378ba8416e5a293bf89c29cada83dfb407a7d4b92 = $this->env->getExtension("native_profiler");
        $__internal_2d403e6d25badea0d1f26ba378ba8416e5a293bf89c29cada83dfb407a7d4b92->enter($__internal_2d403e6d25badea0d1f26ba378ba8416e5a293bf89c29cada83dfb407a7d4b92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_acl.html.twig"));

        // line 18
        $context["acl"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_acl_macro.html.twig", "@SonataAdmin/CRUD/base_acl.html.twig", 18);
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d403e6d25badea0d1f26ba378ba8416e5a293bf89c29cada83dfb407a7d4b92->leave($__internal_2d403e6d25badea0d1f26ba378ba8416e5a293bf89c29cada83dfb407a7d4b92_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_4d5da12a8c3c1102a5eaaf73b6cd7506c76396b00f3a480ee9df30fd7093e66c = $this->env->getExtension("native_profiler");
        $__internal_4d5da12a8c3c1102a5eaaf73b6cd7506c76396b00f3a480ee9df30fd7093e66c->enter($__internal_4d5da12a8c3c1102a5eaaf73b6cd7506c76396b00f3a480ee9df30fd7093e66c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "@SonataAdmin/CRUD/base_acl.html.twig", 15)->display($context);
        
        $__internal_4d5da12a8c3c1102a5eaaf73b6cd7506c76396b00f3a480ee9df30fd7093e66c->leave($__internal_4d5da12a8c3c1102a5eaaf73b6cd7506c76396b00f3a480ee9df30fd7093e66c_prof);

    }

    // line 20
    public function block_form($context, array $blocks = array())
    {
        $__internal_5ca51a80da872b3e01b92c1d4f8abf8ae0ec69cff3d0e90a4fa56b3f4bb60562 = $this->env->getExtension("native_profiler");
        $__internal_5ca51a80da872b3e01b92c1d4f8abf8ae0ec69cff3d0e90a4fa56b3f4bb60562->enter($__internal_5ca51a80da872b3e01b92c1d4f8abf8ae0ec69cff3d0e90a4fa56b3f4bb60562_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 21
        echo "    ";
        $this->displayBlock('form_acl_roles', $context, $blocks);
        // line 24
        echo "    ";
        $this->displayBlock('form_acl_users', $context, $blocks);
        
        $__internal_5ca51a80da872b3e01b92c1d4f8abf8ae0ec69cff3d0e90a4fa56b3f4bb60562->leave($__internal_5ca51a80da872b3e01b92c1d4f8abf8ae0ec69cff3d0e90a4fa56b3f4bb60562_prof);

    }

    // line 21
    public function block_form_acl_roles($context, array $blocks = array())
    {
        $__internal_a3999df59ac467d5fc4559d10e49a1e0f7d26e541ed758c34713d1e92ba1a8c3 = $this->env->getExtension("native_profiler");
        $__internal_a3999df59ac467d5fc4559d10e49a1e0f7d26e541ed758c34713d1e92ba1a8c3->enter($__internal_a3999df59ac467d5fc4559d10e49a1e0f7d26e541ed758c34713d1e92ba1a8c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_roles"));

        // line 22
        echo "        ";
        echo $context["acl"]->getrender_form((isset($context["aclRolesForm"]) ? $context["aclRolesForm"] : $this->getContext($context, "aclRolesForm")), (isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "td_role", (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_a3999df59ac467d5fc4559d10e49a1e0f7d26e541ed758c34713d1e92ba1a8c3->leave($__internal_a3999df59ac467d5fc4559d10e49a1e0f7d26e541ed758c34713d1e92ba1a8c3_prof);

    }

    // line 24
    public function block_form_acl_users($context, array $blocks = array())
    {
        $__internal_e0e71ec323bd970d1a5f3c08a77517aa0fce9ce3cfca72fc7ae617fe6bee8414 = $this->env->getExtension("native_profiler");
        $__internal_e0e71ec323bd970d1a5f3c08a77517aa0fce9ce3cfca72fc7ae617fe6bee8414->enter($__internal_e0e71ec323bd970d1a5f3c08a77517aa0fce9ce3cfca72fc7ae617fe6bee8414_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_users"));

        // line 25
        echo "        ";
        echo $context["acl"]->getrender_form((isset($context["aclUsersForm"]) ? $context["aclUsersForm"] : $this->getContext($context, "aclUsersForm")), (isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "td_username", (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_e0e71ec323bd970d1a5f3c08a77517aa0fce9ce3cfca72fc7ae617fe6bee8414->leave($__internal_e0e71ec323bd970d1a5f3c08a77517aa0fce9ce3cfca72fc7ae617fe6bee8414_prof);

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
