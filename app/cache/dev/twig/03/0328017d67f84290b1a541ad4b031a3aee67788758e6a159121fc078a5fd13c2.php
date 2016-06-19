<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_a02b83c9b654be91b570d298377660eaab753c7ca55a4962bb7be411c1c5fa4b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
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
        $__internal_2d96ced9332ecc453d3217ef7ac5a29466b20305d34d27988118931ba26fc48f = $this->env->getExtension("native_profiler");
        $__internal_2d96ced9332ecc453d3217ef7ac5a29466b20305d34d27988118931ba26fc48f->enter($__internal_2d96ced9332ecc453d3217ef7ac5a29466b20305d34d27988118931ba26fc48f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d96ced9332ecc453d3217ef7ac5a29466b20305d34d27988118931ba26fc48f->leave($__internal_2d96ced9332ecc453d3217ef7ac5a29466b20305d34d27988118931ba26fc48f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c490295114008545072f1c42f86fabbfbc01cec58be9669b3a76f50a80f5f8b2 = $this->env->getExtension("native_profiler");
        $__internal_c490295114008545072f1c42f86fabbfbc01cec58be9669b3a76f50a80f5f8b2->enter($__internal_c490295114008545072f1c42f86fabbfbc01cec58be9669b3a76f50a80f5f8b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_c490295114008545072f1c42f86fabbfbc01cec58be9669b3a76f50a80f5f8b2->leave($__internal_c490295114008545072f1c42f86fabbfbc01cec58be9669b3a76f50a80f5f8b2_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_dc6b833cb1fc8b0792c33aac670e3f8df2585ee8b133151bc255802fc7031ac7 = $this->env->getExtension("native_profiler");
        $__internal_dc6b833cb1fc8b0792c33aac670e3f8df2585ee8b133151bc255802fc7031ac7->enter($__internal_dc6b833cb1fc8b0792c33aac670e3f8df2585ee8b133151bc255802fc7031ac7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_dc6b833cb1fc8b0792c33aac670e3f8df2585ee8b133151bc255802fc7031ac7->leave($__internal_dc6b833cb1fc8b0792c33aac670e3f8df2585ee8b133151bc255802fc7031ac7_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_38d1a506cd233edccbdb5f94d326ba07e46b4100e7e22eaf20eaeda820f7e38f = $this->env->getExtension("native_profiler");
        $__internal_38d1a506cd233edccbdb5f94d326ba07e46b4100e7e22eaf20eaeda820f7e38f->enter($__internal_38d1a506cd233edccbdb5f94d326ba07e46b4100e7e22eaf20eaeda820f7e38f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_38d1a506cd233edccbdb5f94d326ba07e46b4100e7e22eaf20eaeda820f7e38f->leave($__internal_38d1a506cd233edccbdb5f94d326ba07e46b4100e7e22eaf20eaeda820f7e38f_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
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
