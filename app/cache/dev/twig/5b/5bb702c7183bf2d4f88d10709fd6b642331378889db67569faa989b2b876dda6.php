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
        $__internal_0d95992d269df0f989cb514d75751af87bc70a8b85890d1775291a20cdaa2ca3 = $this->env->getExtension("native_profiler");
        $__internal_0d95992d269df0f989cb514d75751af87bc70a8b85890d1775291a20cdaa2ca3->enter($__internal_0d95992d269df0f989cb514d75751af87bc70a8b85890d1775291a20cdaa2ca3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d95992d269df0f989cb514d75751af87bc70a8b85890d1775291a20cdaa2ca3->leave($__internal_0d95992d269df0f989cb514d75751af87bc70a8b85890d1775291a20cdaa2ca3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3870f519f90485136d340697e59026a24f53f40588482bdc52f0234a21c78dfc = $this->env->getExtension("native_profiler");
        $__internal_3870f519f90485136d340697e59026a24f53f40588482bdc52f0234a21c78dfc->enter($__internal_3870f519f90485136d340697e59026a24f53f40588482bdc52f0234a21c78dfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_3870f519f90485136d340697e59026a24f53f40588482bdc52f0234a21c78dfc->leave($__internal_3870f519f90485136d340697e59026a24f53f40588482bdc52f0234a21c78dfc_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_572391d005413a1dd3d40ccef057b44440fd6d0aa6e4c610c85420f7228ef380 = $this->env->getExtension("native_profiler");
        $__internal_572391d005413a1dd3d40ccef057b44440fd6d0aa6e4c610c85420f7228ef380->enter($__internal_572391d005413a1dd3d40ccef057b44440fd6d0aa6e4c610c85420f7228ef380_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_572391d005413a1dd3d40ccef057b44440fd6d0aa6e4c610c85420f7228ef380->leave($__internal_572391d005413a1dd3d40ccef057b44440fd6d0aa6e4c610c85420f7228ef380_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a2ca9647f52a35bfcf5dffa17d688becd8bb26df24b6bbea001cc418a750bffa = $this->env->getExtension("native_profiler");
        $__internal_a2ca9647f52a35bfcf5dffa17d688becd8bb26df24b6bbea001cc418a750bffa->enter($__internal_a2ca9647f52a35bfcf5dffa17d688becd8bb26df24b6bbea001cc418a750bffa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_a2ca9647f52a35bfcf5dffa17d688becd8bb26df24b6bbea001cc418a750bffa->leave($__internal_a2ca9647f52a35bfcf5dffa17d688becd8bb26df24b6bbea001cc418a750bffa_prof);

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
