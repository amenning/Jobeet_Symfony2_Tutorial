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
        $__internal_67a338e97ddae812665ee003a025298d92d07069c6015e8aff4c10fa592ea3f4 = $this->env->getExtension("native_profiler");
        $__internal_67a338e97ddae812665ee003a025298d92d07069c6015e8aff4c10fa592ea3f4->enter($__internal_67a338e97ddae812665ee003a025298d92d07069c6015e8aff4c10fa592ea3f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_67a338e97ddae812665ee003a025298d92d07069c6015e8aff4c10fa592ea3f4->leave($__internal_67a338e97ddae812665ee003a025298d92d07069c6015e8aff4c10fa592ea3f4_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_221f62c4f48fa17c47c47b6e6743f5a501da2f1079b5119a690f41d43cf4deaf = $this->env->getExtension("native_profiler");
        $__internal_221f62c4f48fa17c47c47b6e6743f5a501da2f1079b5119a690f41d43cf4deaf->enter($__internal_221f62c4f48fa17c47c47b6e6743f5a501da2f1079b5119a690f41d43cf4deaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_221f62c4f48fa17c47c47b6e6743f5a501da2f1079b5119a690f41d43cf4deaf->leave($__internal_221f62c4f48fa17c47c47b6e6743f5a501da2f1079b5119a690f41d43cf4deaf_prof);

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
