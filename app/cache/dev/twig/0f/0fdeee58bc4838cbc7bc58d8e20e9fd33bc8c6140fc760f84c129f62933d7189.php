<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_1f3367bdad487af63122faa8ab82765ef897ebc3f49d08d80673105223fb64c6 extends Twig_Template
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
        $__internal_f7ef1789173ed96dc7533679f897aaec431201d2ff2c3b8afcb86d81aba4ea45 = $this->env->getExtension("native_profiler");
        $__internal_f7ef1789173ed96dc7533679f897aaec431201d2ff2c3b8afcb86d81aba4ea45->enter($__internal_f7ef1789173ed96dc7533679f897aaec431201d2ff2c3b8afcb86d81aba4ea45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_f7ef1789173ed96dc7533679f897aaec431201d2ff2c3b8afcb86d81aba4ea45->leave($__internal_f7ef1789173ed96dc7533679f897aaec431201d2ff2c3b8afcb86d81aba4ea45_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_f3f7d0db04aa184a54a8c4ab370c8fd7a263a8cb1baef56c54518cdd5bb26692 = $this->env->getExtension("native_profiler");
        $__internal_f3f7d0db04aa184a54a8c4ab370c8fd7a263a8cb1baef56c54518cdd5bb26692->enter($__internal_f3f7d0db04aa184a54a8c4ab370c8fd7a263a8cb1baef56c54518cdd5bb26692_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_f3f7d0db04aa184a54a8c4ab370c8fd7a263a8cb1baef56c54518cdd5bb26692->leave($__internal_f3f7d0db04aa184a54a8c4ab370c8fd7a263a8cb1baef56c54518cdd5bb26692_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
