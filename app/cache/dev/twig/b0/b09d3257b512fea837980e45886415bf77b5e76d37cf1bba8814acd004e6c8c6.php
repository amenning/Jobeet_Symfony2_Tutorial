<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_a53df92fd82faf3246feded0683c9fdcf3090a8ccf4caea1122ea06d2f1bf4cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_89bc8981128674a4ad10eed69eed7b1fd2531c103cffc4e48c0f80243b842a05 = $this->env->getExtension("native_profiler");
        $__internal_89bc8981128674a4ad10eed69eed7b1fd2531c103cffc4e48c0f80243b842a05->enter($__internal_89bc8981128674a4ad10eed69eed7b1fd2531c103cffc4e48c0f80243b842a05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_89bc8981128674a4ad10eed69eed7b1fd2531c103cffc4e48c0f80243b842a05->leave($__internal_89bc8981128674a4ad10eed69eed7b1fd2531c103cffc4e48c0f80243b842a05_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_164297c2c7bd740189442865a819d283f2bc1258fbeee2d8141e86e315a7c7ab = $this->env->getExtension("native_profiler");
        $__internal_164297c2c7bd740189442865a819d283f2bc1258fbeee2d8141e86e315a7c7ab->enter($__internal_164297c2c7bd740189442865a819d283f2bc1258fbeee2d8141e86e315a7c7ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_164297c2c7bd740189442865a819d283f2bc1258fbeee2d8141e86e315a7c7ab->leave($__internal_164297c2c7bd740189442865a819d283f2bc1258fbeee2d8141e86e315a7c7ab_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b0646a12409f5001c5ce8ffc8169ca86316e396474c6dc272a6a8e1319ea0e98 = $this->env->getExtension("native_profiler");
        $__internal_b0646a12409f5001c5ce8ffc8169ca86316e396474c6dc272a6a8e1319ea0e98->enter($__internal_b0646a12409f5001c5ce8ffc8169ca86316e396474c6dc272a6a8e1319ea0e98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b0646a12409f5001c5ce8ffc8169ca86316e396474c6dc272a6a8e1319ea0e98->leave($__internal_b0646a12409f5001c5ce8ffc8169ca86316e396474c6dc272a6a8e1319ea0e98_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ed30b0a4ac952e39c8daa3bf18b3a7bafd5336b2dd491f883e54e7645c109a9d = $this->env->getExtension("native_profiler");
        $__internal_ed30b0a4ac952e39c8daa3bf18b3a7bafd5336b2dd491f883e54e7645c109a9d->enter($__internal_ed30b0a4ac952e39c8daa3bf18b3a7bafd5336b2dd491f883e54e7645c109a9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ed30b0a4ac952e39c8daa3bf18b3a7bafd5336b2dd491f883e54e7645c109a9d->leave($__internal_ed30b0a4ac952e39c8daa3bf18b3a7bafd5336b2dd491f883e54e7645c109a9d_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
