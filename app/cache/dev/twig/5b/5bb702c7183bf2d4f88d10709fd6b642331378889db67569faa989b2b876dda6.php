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
        $__internal_c2e41b6f0af980f05dab31b1e548ebd27e0325ff3c60b986480ed2e22187f7d4 = $this->env->getExtension("native_profiler");
        $__internal_c2e41b6f0af980f05dab31b1e548ebd27e0325ff3c60b986480ed2e22187f7d4->enter($__internal_c2e41b6f0af980f05dab31b1e548ebd27e0325ff3c60b986480ed2e22187f7d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c2e41b6f0af980f05dab31b1e548ebd27e0325ff3c60b986480ed2e22187f7d4->leave($__internal_c2e41b6f0af980f05dab31b1e548ebd27e0325ff3c60b986480ed2e22187f7d4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e20920617b302a993dd3694e39c55d9c93863288268e7fdec26f475b9605ad0a = $this->env->getExtension("native_profiler");
        $__internal_e20920617b302a993dd3694e39c55d9c93863288268e7fdec26f475b9605ad0a->enter($__internal_e20920617b302a993dd3694e39c55d9c93863288268e7fdec26f475b9605ad0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_e20920617b302a993dd3694e39c55d9c93863288268e7fdec26f475b9605ad0a->leave($__internal_e20920617b302a993dd3694e39c55d9c93863288268e7fdec26f475b9605ad0a_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1226122059a00f9e4fc881aa8c416eb0c6914a4b1ca5090efd7e3429634466df = $this->env->getExtension("native_profiler");
        $__internal_1226122059a00f9e4fc881aa8c416eb0c6914a4b1ca5090efd7e3429634466df->enter($__internal_1226122059a00f9e4fc881aa8c416eb0c6914a4b1ca5090efd7e3429634466df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_1226122059a00f9e4fc881aa8c416eb0c6914a4b1ca5090efd7e3429634466df->leave($__internal_1226122059a00f9e4fc881aa8c416eb0c6914a4b1ca5090efd7e3429634466df_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_430f66ed2f6011bbb4ae7553e270f90b9f65e8b568d679ce857e7309c2005a5c = $this->env->getExtension("native_profiler");
        $__internal_430f66ed2f6011bbb4ae7553e270f90b9f65e8b568d679ce857e7309c2005a5c->enter($__internal_430f66ed2f6011bbb4ae7553e270f90b9f65e8b568d679ce857e7309c2005a5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_430f66ed2f6011bbb4ae7553e270f90b9f65e8b568d679ce857e7309c2005a5c->leave($__internal_430f66ed2f6011bbb4ae7553e270f90b9f65e8b568d679ce857e7309c2005a5c_prof);

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
