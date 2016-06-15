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
        $__internal_87d15f68fae088e8a6e0cd46c457f12ef2c4d0303af8c2e862b6a93a8af2f1b2 = $this->env->getExtension("native_profiler");
        $__internal_87d15f68fae088e8a6e0cd46c457f12ef2c4d0303af8c2e862b6a93a8af2f1b2->enter($__internal_87d15f68fae088e8a6e0cd46c457f12ef2c4d0303af8c2e862b6a93a8af2f1b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_87d15f68fae088e8a6e0cd46c457f12ef2c4d0303af8c2e862b6a93a8af2f1b2->leave($__internal_87d15f68fae088e8a6e0cd46c457f12ef2c4d0303af8c2e862b6a93a8af2f1b2_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_2355dbb454de8ec478bf84460ecc9a99fab5e4b4a1af2d9484cac0cbe8438c9f = $this->env->getExtension("native_profiler");
        $__internal_2355dbb454de8ec478bf84460ecc9a99fab5e4b4a1af2d9484cac0cbe8438c9f->enter($__internal_2355dbb454de8ec478bf84460ecc9a99fab5e4b4a1af2d9484cac0cbe8438c9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_2355dbb454de8ec478bf84460ecc9a99fab5e4b4a1af2d9484cac0cbe8438c9f->leave($__internal_2355dbb454de8ec478bf84460ecc9a99fab5e4b4a1af2d9484cac0cbe8438c9f_prof);

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
