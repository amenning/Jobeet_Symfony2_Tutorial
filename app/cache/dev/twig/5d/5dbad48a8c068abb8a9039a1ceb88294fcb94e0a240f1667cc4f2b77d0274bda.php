<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_c11b63bf37fcbb774887de6cbba6acfd7999b691560506f3f6e22981ea672222 extends Twig_Template
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
        $__internal_886aa630bba49d2f14039556d318610553deb40ab718379acd42426590419de5 = $this->env->getExtension("native_profiler");
        $__internal_886aa630bba49d2f14039556d318610553deb40ab718379acd42426590419de5->enter($__internal_886aa630bba49d2f14039556d318610553deb40ab718379acd42426590419de5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_886aa630bba49d2f14039556d318610553deb40ab718379acd42426590419de5->leave($__internal_886aa630bba49d2f14039556d318610553deb40ab718379acd42426590419de5_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_843861066eb8af89035ea4b01f05656c2319c6aca18fc88b031c4405c4656210 = $this->env->getExtension("native_profiler");
        $__internal_843861066eb8af89035ea4b01f05656c2319c6aca18fc88b031c4405c4656210->enter($__internal_843861066eb8af89035ea4b01f05656c2319c6aca18fc88b031c4405c4656210_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_843861066eb8af89035ea4b01f05656c2319c6aca18fc88b031c4405c4656210->leave($__internal_843861066eb8af89035ea4b01f05656c2319c6aca18fc88b031c4405c4656210_prof);

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
