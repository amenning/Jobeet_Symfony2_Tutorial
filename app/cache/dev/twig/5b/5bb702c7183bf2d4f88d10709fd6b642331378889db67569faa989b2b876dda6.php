<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_d3e9c241323ec15ca8837dc2ca9f417e7cdc63486a04a06d8f2aaa887898b75c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_dbec212c54fc1672a654d3a7649b277cea7303a71eeb2d49ca21c722ac5ad830 = $this->env->getExtension("native_profiler");
        $__internal_dbec212c54fc1672a654d3a7649b277cea7303a71eeb2d49ca21c722ac5ad830->enter($__internal_dbec212c54fc1672a654d3a7649b277cea7303a71eeb2d49ca21c722ac5ad830_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dbec212c54fc1672a654d3a7649b277cea7303a71eeb2d49ca21c722ac5ad830->leave($__internal_dbec212c54fc1672a654d3a7649b277cea7303a71eeb2d49ca21c722ac5ad830_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_89bef10d0861f1f076e7d417c3f7e2e97b341623c0a55c056c25f18a3cccb2ff = $this->env->getExtension("native_profiler");
        $__internal_89bef10d0861f1f076e7d417c3f7e2e97b341623c0a55c056c25f18a3cccb2ff->enter($__internal_89bef10d0861f1f076e7d417c3f7e2e97b341623c0a55c056c25f18a3cccb2ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_89bef10d0861f1f076e7d417c3f7e2e97b341623c0a55c056c25f18a3cccb2ff->leave($__internal_89bef10d0861f1f076e7d417c3f7e2e97b341623c0a55c056c25f18a3cccb2ff_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_94d7db8613a50bba1184ac4f01a80fbe1298f85c8385afe8cb99b566c0d20c76 = $this->env->getExtension("native_profiler");
        $__internal_94d7db8613a50bba1184ac4f01a80fbe1298f85c8385afe8cb99b566c0d20c76->enter($__internal_94d7db8613a50bba1184ac4f01a80fbe1298f85c8385afe8cb99b566c0d20c76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_94d7db8613a50bba1184ac4f01a80fbe1298f85c8385afe8cb99b566c0d20c76->leave($__internal_94d7db8613a50bba1184ac4f01a80fbe1298f85c8385afe8cb99b566c0d20c76_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5ee03dcc5b67b374a95a2e25711fbf3c554e8a3c1a6b6ab964495f1f3b897f50 = $this->env->getExtension("native_profiler");
        $__internal_5ee03dcc5b67b374a95a2e25711fbf3c554e8a3c1a6b6ab964495f1f3b897f50->enter($__internal_5ee03dcc5b67b374a95a2e25711fbf3c554e8a3c1a6b6ab964495f1f3b897f50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_5ee03dcc5b67b374a95a2e25711fbf3c554e8a3c1a6b6ab964495f1f3b897f50->leave($__internal_5ee03dcc5b67b374a95a2e25711fbf3c554e8a3c1a6b6ab964495f1f3b897f50_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
