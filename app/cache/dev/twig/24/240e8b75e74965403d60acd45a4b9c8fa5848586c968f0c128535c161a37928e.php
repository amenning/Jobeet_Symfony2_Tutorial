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
        $__internal_f75affddeb96b4600ec81ec83a4e33c06e6ce535bfec70c335cdfc42b2df3d83 = $this->env->getExtension("native_profiler");
        $__internal_f75affddeb96b4600ec81ec83a4e33c06e6ce535bfec70c335cdfc42b2df3d83->enter($__internal_f75affddeb96b4600ec81ec83a4e33c06e6ce535bfec70c335cdfc42b2df3d83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f75affddeb96b4600ec81ec83a4e33c06e6ce535bfec70c335cdfc42b2df3d83->leave($__internal_f75affddeb96b4600ec81ec83a4e33c06e6ce535bfec70c335cdfc42b2df3d83_prof);

    }

    // line 3
    public function block_field($context, array $blocks = array())
    {
        $__internal_b9b6721bd3f8fc82ac30a4aed8d51df3c8287b3dc61224ea6ec2edb2f444263b = $this->env->getExtension("native_profiler");
        $__internal_b9b6721bd3f8fc82ac30a4aed8d51df3c8287b3dc61224ea6ec2edb2f444263b->enter($__internal_b9b6721bd3f8fc82ac30a4aed8d51df3c8287b3dc61224ea6ec2edb2f444263b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 4
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:_email_link.html.twig", "SonataAdminBundle:CRUD:show_email.html.twig", 4)->display($context);
        
        $__internal_b9b6721bd3f8fc82ac30a4aed8d51df3c8287b3dc61224ea6ec2edb2f444263b->leave($__internal_b9b6721bd3f8fc82ac30a4aed8d51df3c8287b3dc61224ea6ec2edb2f444263b_prof);

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
