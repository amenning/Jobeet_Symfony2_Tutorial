<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_67b6924862c0c0e01f44fee66a71db0af5f29e9c3f3846d4d72e9f9358ef57f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_778c156aa229885595ff5d039d5b661ca8bb28d57be9dfc05066ae19a573639e = $this->env->getExtension("native_profiler");
        $__internal_778c156aa229885595ff5d039d5b661ca8bb28d57be9dfc05066ae19a573639e->enter($__internal_778c156aa229885595ff5d039d5b661ca8bb28d57be9dfc05066ae19a573639e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_778c156aa229885595ff5d039d5b661ca8bb28d57be9dfc05066ae19a573639e->leave($__internal_778c156aa229885595ff5d039d5b661ca8bb28d57be9dfc05066ae19a573639e_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_4d653599936e8468373dda7b74bf1b7b80833f71e44c2e016ebbbe94a68bdee1 = $this->env->getExtension("native_profiler");
        $__internal_4d653599936e8468373dda7b74bf1b7b80833f71e44c2e016ebbbe94a68bdee1->enter($__internal_4d653599936e8468373dda7b74bf1b7b80833f71e44c2e016ebbbe94a68bdee1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_4d653599936e8468373dda7b74bf1b7b80833f71e44c2e016ebbbe94a68bdee1->leave($__internal_4d653599936e8468373dda7b74bf1b7b80833f71e44c2e016ebbbe94a68bdee1_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
