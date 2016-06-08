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
        $__internal_12ebe1cf434f8cea23c30d55239d645c9ddf1c229098c83a03b84911e0b2b94e = $this->env->getExtension("native_profiler");
        $__internal_12ebe1cf434f8cea23c30d55239d645c9ddf1c229098c83a03b84911e0b2b94e->enter($__internal_12ebe1cf434f8cea23c30d55239d645c9ddf1c229098c83a03b84911e0b2b94e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_12ebe1cf434f8cea23c30d55239d645c9ddf1c229098c83a03b84911e0b2b94e->leave($__internal_12ebe1cf434f8cea23c30d55239d645c9ddf1c229098c83a03b84911e0b2b94e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_94ba30a1283ab1c043649d5a8df42f1102517ea785ce629066daee7a4f899ee0 = $this->env->getExtension("native_profiler");
        $__internal_94ba30a1283ab1c043649d5a8df42f1102517ea785ce629066daee7a4f899ee0->enter($__internal_94ba30a1283ab1c043649d5a8df42f1102517ea785ce629066daee7a4f899ee0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_94ba30a1283ab1c043649d5a8df42f1102517ea785ce629066daee7a4f899ee0->leave($__internal_94ba30a1283ab1c043649d5a8df42f1102517ea785ce629066daee7a4f899ee0_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f63e96b031fe097768703778715bcdbe804c834f3c80311bfb0a942737accbd5 = $this->env->getExtension("native_profiler");
        $__internal_f63e96b031fe097768703778715bcdbe804c834f3c80311bfb0a942737accbd5->enter($__internal_f63e96b031fe097768703778715bcdbe804c834f3c80311bfb0a942737accbd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f63e96b031fe097768703778715bcdbe804c834f3c80311bfb0a942737accbd5->leave($__internal_f63e96b031fe097768703778715bcdbe804c834f3c80311bfb0a942737accbd5_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a35f2aea7eb12b2186515da2a8934c27191e8772c0b8b46d4dba8ecbbfbfa157 = $this->env->getExtension("native_profiler");
        $__internal_a35f2aea7eb12b2186515da2a8934c27191e8772c0b8b46d4dba8ecbbfbfa157->enter($__internal_a35f2aea7eb12b2186515da2a8934c27191e8772c0b8b46d4dba8ecbbfbfa157_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a35f2aea7eb12b2186515da2a8934c27191e8772c0b8b46d4dba8ecbbfbfa157->leave($__internal_a35f2aea7eb12b2186515da2a8934c27191e8772c0b8b46d4dba8ecbbfbfa157_prof);

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
