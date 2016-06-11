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
        $__internal_2fee722788d32f9dc2e02038bd59720501c472267a6d07c7dc035012f6f621ca = $this->env->getExtension("native_profiler");
        $__internal_2fee722788d32f9dc2e02038bd59720501c472267a6d07c7dc035012f6f621ca->enter($__internal_2fee722788d32f9dc2e02038bd59720501c472267a6d07c7dc035012f6f621ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_2fee722788d32f9dc2e02038bd59720501c472267a6d07c7dc035012f6f621ca->leave($__internal_2fee722788d32f9dc2e02038bd59720501c472267a6d07c7dc035012f6f621ca_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_ed89cb921b216334019169bec0b2378239ede9e76a19f4603e499ee45d97fc1c = $this->env->getExtension("native_profiler");
        $__internal_ed89cb921b216334019169bec0b2378239ede9e76a19f4603e499ee45d97fc1c->enter($__internal_ed89cb921b216334019169bec0b2378239ede9e76a19f4603e499ee45d97fc1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_ed89cb921b216334019169bec0b2378239ede9e76a19f4603e499ee45d97fc1c->leave($__internal_ed89cb921b216334019169bec0b2378239ede9e76a19f4603e499ee45d97fc1c_prof);

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
