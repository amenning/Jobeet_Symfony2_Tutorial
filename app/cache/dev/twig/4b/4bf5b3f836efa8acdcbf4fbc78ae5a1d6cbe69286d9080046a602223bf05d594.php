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
        $__internal_f86d8025355ebc2c85a1226d75944b569735c2833c4e3dcf7824680caddda2f4 = $this->env->getExtension("native_profiler");
        $__internal_f86d8025355ebc2c85a1226d75944b569735c2833c4e3dcf7824680caddda2f4->enter($__internal_f86d8025355ebc2c85a1226d75944b569735c2833c4e3dcf7824680caddda2f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_f86d8025355ebc2c85a1226d75944b569735c2833c4e3dcf7824680caddda2f4->leave($__internal_f86d8025355ebc2c85a1226d75944b569735c2833c4e3dcf7824680caddda2f4_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_f3b54e3c955eb6746dba1bf659aec7933df3d030545b2a9b3e0c781bb4f66366 = $this->env->getExtension("native_profiler");
        $__internal_f3b54e3c955eb6746dba1bf659aec7933df3d030545b2a9b3e0c781bb4f66366->enter($__internal_f3b54e3c955eb6746dba1bf659aec7933df3d030545b2a9b3e0c781bb4f66366_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_f3b54e3c955eb6746dba1bf659aec7933df3d030545b2a9b3e0c781bb4f66366->leave($__internal_f3b54e3c955eb6746dba1bf659aec7933df3d030545b2a9b3e0c781bb4f66366_prof);

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
