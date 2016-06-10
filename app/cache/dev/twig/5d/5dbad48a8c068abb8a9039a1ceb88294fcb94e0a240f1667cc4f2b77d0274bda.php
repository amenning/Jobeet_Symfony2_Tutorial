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
        $__internal_64c5eec0095d8eba10b5c6fb545952b8ca8e128b1055cf8b16cde77c92a19659 = $this->env->getExtension("native_profiler");
        $__internal_64c5eec0095d8eba10b5c6fb545952b8ca8e128b1055cf8b16cde77c92a19659->enter($__internal_64c5eec0095d8eba10b5c6fb545952b8ca8e128b1055cf8b16cde77c92a19659_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_64c5eec0095d8eba10b5c6fb545952b8ca8e128b1055cf8b16cde77c92a19659->leave($__internal_64c5eec0095d8eba10b5c6fb545952b8ca8e128b1055cf8b16cde77c92a19659_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_f2e538c726fca7dd1c07acb3fc9e5ce5ebe65229eb12a1d80bfee815f46c9c78 = $this->env->getExtension("native_profiler");
        $__internal_f2e538c726fca7dd1c07acb3fc9e5ce5ebe65229eb12a1d80bfee815f46c9c78->enter($__internal_f2e538c726fca7dd1c07acb3fc9e5ce5ebe65229eb12a1d80bfee815f46c9c78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_f2e538c726fca7dd1c07acb3fc9e5ce5ebe65229eb12a1d80bfee815f46c9c78->leave($__internal_f2e538c726fca7dd1c07acb3fc9e5ce5ebe65229eb12a1d80bfee815f46c9c78_prof);

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
