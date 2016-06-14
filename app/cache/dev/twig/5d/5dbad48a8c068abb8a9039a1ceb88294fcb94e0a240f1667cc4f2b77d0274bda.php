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
        $__internal_ebaf808098784b15b66c31b98921a25506253b2355628b25fb10d4a858ce9a21 = $this->env->getExtension("native_profiler");
        $__internal_ebaf808098784b15b66c31b98921a25506253b2355628b25fb10d4a858ce9a21->enter($__internal_ebaf808098784b15b66c31b98921a25506253b2355628b25fb10d4a858ce9a21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_ebaf808098784b15b66c31b98921a25506253b2355628b25fb10d4a858ce9a21->leave($__internal_ebaf808098784b15b66c31b98921a25506253b2355628b25fb10d4a858ce9a21_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_a3b2cc24117803126ce114e8f9f1530b2f304f94aa28353980e425fe3272b633 = $this->env->getExtension("native_profiler");
        $__internal_a3b2cc24117803126ce114e8f9f1530b2f304f94aa28353980e425fe3272b633->enter($__internal_a3b2cc24117803126ce114e8f9f1530b2f304f94aa28353980e425fe3272b633_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_a3b2cc24117803126ce114e8f9f1530b2f304f94aa28353980e425fe3272b633->leave($__internal_a3b2cc24117803126ce114e8f9f1530b2f304f94aa28353980e425fe3272b633_prof);

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
