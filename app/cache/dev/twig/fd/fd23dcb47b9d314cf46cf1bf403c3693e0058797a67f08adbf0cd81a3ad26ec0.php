<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_b8693eb806b3b66d5de21741ec3597634f91b97306671084859ad7e5d4751996 extends Twig_Template
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
        $__internal_e74a14106cc377825c16f872e2f81c231a229b7709ecbce98c8a22ac76ac9fa9 = $this->env->getExtension("native_profiler");
        $__internal_e74a14106cc377825c16f872e2f81c231a229b7709ecbce98c8a22ac76ac9fa9->enter($__internal_e74a14106cc377825c16f872e2f81c231a229b7709ecbce98c8a22ac76ac9fa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e74a14106cc377825c16f872e2f81c231a229b7709ecbce98c8a22ac76ac9fa9->leave($__internal_e74a14106cc377825c16f872e2f81c231a229b7709ecbce98c8a22ac76ac9fa9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_66bd513cd76f3bc30f39efcd641c6a05d791d27faa4556ed38994e5784f3158a = $this->env->getExtension("native_profiler");
        $__internal_66bd513cd76f3bc30f39efcd641c6a05d791d27faa4556ed38994e5784f3158a->enter($__internal_66bd513cd76f3bc30f39efcd641c6a05d791d27faa4556ed38994e5784f3158a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_66bd513cd76f3bc30f39efcd641c6a05d791d27faa4556ed38994e5784f3158a->leave($__internal_66bd513cd76f3bc30f39efcd641c6a05d791d27faa4556ed38994e5784f3158a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_752080472deda2ba83c235efabd90b473dfce07bdbc99ee467bb22832233104e = $this->env->getExtension("native_profiler");
        $__internal_752080472deda2ba83c235efabd90b473dfce07bdbc99ee467bb22832233104e->enter($__internal_752080472deda2ba83c235efabd90b473dfce07bdbc99ee467bb22832233104e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_752080472deda2ba83c235efabd90b473dfce07bdbc99ee467bb22832233104e->leave($__internal_752080472deda2ba83c235efabd90b473dfce07bdbc99ee467bb22832233104e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2ee03d16c21ba06e9d551290b0c81d64dd68eb022160ce7c5e1e2821f63f5e6e = $this->env->getExtension("native_profiler");
        $__internal_2ee03d16c21ba06e9d551290b0c81d64dd68eb022160ce7c5e1e2821f63f5e6e->enter($__internal_2ee03d16c21ba06e9d551290b0c81d64dd68eb022160ce7c5e1e2821f63f5e6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2ee03d16c21ba06e9d551290b0c81d64dd68eb022160ce7c5e1e2821f63f5e6e->leave($__internal_2ee03d16c21ba06e9d551290b0c81d64dd68eb022160ce7c5e1e2821f63f5e6e_prof);

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
