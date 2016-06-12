<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_dc23f18f32465427fb0e1136e0172e5d7a95bb25e2967c7847d38f9dab0dc028 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_99ca10946fe3a2894eba56d9c6f601a33c6f0d1dbb3ca5cb945c6b549bdb9b38 = $this->env->getExtension("native_profiler");
        $__internal_99ca10946fe3a2894eba56d9c6f601a33c6f0d1dbb3ca5cb945c6b549bdb9b38->enter($__internal_99ca10946fe3a2894eba56d9c6f601a33c6f0d1dbb3ca5cb945c6b549bdb9b38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_99ca10946fe3a2894eba56d9c6f601a33c6f0d1dbb3ca5cb945c6b549bdb9b38->leave($__internal_99ca10946fe3a2894eba56d9c6f601a33c6f0d1dbb3ca5cb945c6b549bdb9b38_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b9d198175efbbb39727527dd6d1730422dcc67586bc4017e6435aab64759f79f = $this->env->getExtension("native_profiler");
        $__internal_b9d198175efbbb39727527dd6d1730422dcc67586bc4017e6435aab64759f79f->enter($__internal_b9d198175efbbb39727527dd6d1730422dcc67586bc4017e6435aab64759f79f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b9d198175efbbb39727527dd6d1730422dcc67586bc4017e6435aab64759f79f->leave($__internal_b9d198175efbbb39727527dd6d1730422dcc67586bc4017e6435aab64759f79f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3d95b60b95057bdeefaef256201e4158cfda3b88c9fbdbb2ae21a1b1aa2c3f2d = $this->env->getExtension("native_profiler");
        $__internal_3d95b60b95057bdeefaef256201e4158cfda3b88c9fbdbb2ae21a1b1aa2c3f2d->enter($__internal_3d95b60b95057bdeefaef256201e4158cfda3b88c9fbdbb2ae21a1b1aa2c3f2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3d95b60b95057bdeefaef256201e4158cfda3b88c9fbdbb2ae21a1b1aa2c3f2d->leave($__internal_3d95b60b95057bdeefaef256201e4158cfda3b88c9fbdbb2ae21a1b1aa2c3f2d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ea0edade3a901694fc712d07d191c9ff88596db4387a14c69e07bb430ddeccc2 = $this->env->getExtension("native_profiler");
        $__internal_ea0edade3a901694fc712d07d191c9ff88596db4387a14c69e07bb430ddeccc2->enter($__internal_ea0edade3a901694fc712d07d191c9ff88596db4387a14c69e07bb430ddeccc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ea0edade3a901694fc712d07d191c9ff88596db4387a14c69e07bb430ddeccc2->leave($__internal_ea0edade3a901694fc712d07d191c9ff88596db4387a14c69e07bb430ddeccc2_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
