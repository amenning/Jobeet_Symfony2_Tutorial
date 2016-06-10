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
        $__internal_4d14540e3989da9f5f41298be266ddb250929c591614e2ce2692edd095fb16ee = $this->env->getExtension("native_profiler");
        $__internal_4d14540e3989da9f5f41298be266ddb250929c591614e2ce2692edd095fb16ee->enter($__internal_4d14540e3989da9f5f41298be266ddb250929c591614e2ce2692edd095fb16ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_4d14540e3989da9f5f41298be266ddb250929c591614e2ce2692edd095fb16ee->leave($__internal_4d14540e3989da9f5f41298be266ddb250929c591614e2ce2692edd095fb16ee_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_1c831f75e6453de234a84bc8de597837bd18fb59d97c958b64a1777193d9a9fa = $this->env->getExtension("native_profiler");
        $__internal_1c831f75e6453de234a84bc8de597837bd18fb59d97c958b64a1777193d9a9fa->enter($__internal_1c831f75e6453de234a84bc8de597837bd18fb59d97c958b64a1777193d9a9fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_1c831f75e6453de234a84bc8de597837bd18fb59d97c958b64a1777193d9a9fa->leave($__internal_1c831f75e6453de234a84bc8de597837bd18fb59d97c958b64a1777193d9a9fa_prof);

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
