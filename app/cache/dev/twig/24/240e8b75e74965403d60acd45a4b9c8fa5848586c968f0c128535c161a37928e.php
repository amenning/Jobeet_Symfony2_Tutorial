<?php

/* SonataAdminBundle:CRUD:show_email.html.twig */
class __TwigTemplate_f5f47c802abdd71991301478ae08b0e62c8c51ef3f38f9025851d2eb5b0d66f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_email.html.twig", 1);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4ef7fefbad44466706c700f96a5a4861b7d9f1c855256dba8d6e1d1b99185b49 = $this->env->getExtension("native_profiler");
        $__internal_4ef7fefbad44466706c700f96a5a4861b7d9f1c855256dba8d6e1d1b99185b49->enter($__internal_4ef7fefbad44466706c700f96a5a4861b7d9f1c855256dba8d6e1d1b99185b49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4ef7fefbad44466706c700f96a5a4861b7d9f1c855256dba8d6e1d1b99185b49->leave($__internal_4ef7fefbad44466706c700f96a5a4861b7d9f1c855256dba8d6e1d1b99185b49_prof);

    }

    // line 3
    public function block_field($context, array $blocks = array())
    {
        $__internal_67973db090463171355c6f56f41dabbf92f144db01a6ea3478eae9e21c523038 = $this->env->getExtension("native_profiler");
        $__internal_67973db090463171355c6f56f41dabbf92f144db01a6ea3478eae9e21c523038->enter($__internal_67973db090463171355c6f56f41dabbf92f144db01a6ea3478eae9e21c523038_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 4
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:_email_link.html.twig", "SonataAdminBundle:CRUD:show_email.html.twig", 4)->display($context);
        
        $__internal_67973db090463171355c6f56f41dabbf92f144db01a6ea3478eae9e21c523038->leave($__internal_67973db090463171355c6f56f41dabbf92f144db01a6ea3478eae9e21c523038_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}*/
/* */
/* {% block field %}*/
/*     {% include 'SonataAdminBundle:CRUD:_email_link.html.twig' %}*/
/* {% endblock %}*/
/* */
