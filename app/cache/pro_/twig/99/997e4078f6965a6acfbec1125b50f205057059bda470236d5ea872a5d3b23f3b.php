<?php

/* :job:index.atom.twig */
class __TwigTemplate_9796abb0a88bba88b981744c9090ca2c281b6034597766e9bbdc1306a4424c84 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!-- src/Ens/JobeetBundle/Resources/views/Job/index.atom.twig -->
<?xml version=\"1.0\" encoding=\"utf-8\"?>
<feed xmlns=\"http://www.w3.org/2005/Atom\">
\t<title>Jobeet</title>
\t<subtitle>Latest Jobs</subtitle>
\t<link href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getUrl("ens_job_index", array("_format" => "atom"));
        echo "\" rel=\"self\" />
\t<link href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getUrl("ens_jobeet_homepage");
        echo "\" />
\t<updated>";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["lastUpdated"]) ? $context["lastUpdated"] : null), "html", null, true);
        echo "</updated>
\t<author><name>Jobeet</name></author>
\t<id>";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["feedId"]) ? $context["feedId"] : null), "html", null, true);
        echo "</id>
\t
";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 13
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["category"], "activejobs", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 14
                echo "    <entry>
      <title>";
                // line 15
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "position", array()), "html", null, true);
                echo " (";
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "location", array()), "html", null, true);
                echo ")</title>
      <link href=\"";
                // line 16
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("ens_job_show", array("id" => $this->getAttribute($context["entity"], "id", array()), "company" => $this->getAttribute($context["entity"], "companyslug", array()), "location" => $this->getAttribute($context["entity"], "locationslug", array()), "position" => $this->getAttribute($context["entity"], "positionslug", array()))), "html", null, true);
                echo "\" />
      <id>";
                // line 17
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
                echo "</id>
      <updated>";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "createdAt", array()), "format", array(0 => twig_constant("DATE_ATOM")), "method"), "html", null, true);
                echo "</updated>
      <summary type=\"xhtml\">
        <div xmlns=\"http://www.w3.org/1999/xhtml\">
          ";
                // line 21
                if ($this->getAttribute($context["entity"], "logo", array())) {
                    // line 22
                    echo "            <div>
              <a href=\"";
                    // line 23
                    echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "url", array()), "html", null, true);
                    echo "\">
                <img src=\"http://";
                    // line 24
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "host", array()), "html", null, true);
                    echo "/uploads/jobs/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "logo", array()), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "company", array()), "html", null, true);
                    echo " logo\" />
              </a>
            </div>
          ";
                }
                // line 28
                echo "          <div>
            ";
                // line 29
                echo nl2br(twig_escape_filter($this->env, $this->getAttribute($context["entity"], "description", array()), "html", null, true));
                echo "
          </div>
          <h4>How to apply?</h4>
          <p>";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "howtoapply", array()), "html", null, true);
                echo "</p>
        </div>
      </summary>
      <author><name>";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "company", array()), "html", null, true);
                echo "</name></author>
    </entry>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "</feed>";
    }

    public function getTemplateName()
    {
        return ":job:index.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 39,  111 => 35,  105 => 32,  99 => 29,  96 => 28,  85 => 24,  81 => 23,  78 => 22,  76 => 21,  70 => 18,  66 => 17,  62 => 16,  56 => 15,  53 => 14,  48 => 13,  44 => 12,  39 => 10,  34 => 8,  30 => 7,  26 => 6,  19 => 1,);
    }
}
/* <!-- src/Ens/JobeetBundle/Resources/views/Job/index.atom.twig -->*/
/* <?xml version="1.0" encoding="utf-8"?>*/
/* <feed xmlns="http://www.w3.org/2005/Atom">*/
/* 	<title>Jobeet</title>*/
/* 	<subtitle>Latest Jobs</subtitle>*/
/* 	<link href="{{ url('ens_job_index', {'_format': 'atom'}) }}" rel="self" />*/
/* 	<link href="{{ url('ens_jobeet_homepage') }}" />*/
/* 	<updated>{{ lastUpdated }}</updated>*/
/* 	<author><name>Jobeet</name></author>*/
/* 	<id>{{ feedId }}</id>*/
/* 	*/
/* {% for category in categories %}*/
/*   {% for entity in category.activejobs %}*/
/*     <entry>*/
/*       <title>{{ entity.position }} ({{ entity.location }})</title>*/
/*       <link href="{{ url('ens_job_show', { 'id': entity.id, 'company': entity.companyslug, 'location': entity.locationslug, 'position': entity.positionslug }) }}" />*/
/*       <id>{{ entity.id }}</id>*/
/*       <updated>{{ entity.createdAt.format(constant('DATE_ATOM')) }}</updated>*/
/*       <summary type="xhtml">*/
/*         <div xmlns="http://www.w3.org/1999/xhtml">*/
/*           {% if entity.logo %}*/
/*             <div>*/
/*               <a href="{{ entity.url }}">*/
/*                 <img src="http://{{ app.request.host }}/uploads/jobs/{{ entity.logo }}" alt="{{ entity.company }} logo" />*/
/*               </a>*/
/*             </div>*/
/*           {% endif %}*/
/*           <div>*/
/*             {{ entity.description|nl2br }}*/
/*           </div>*/
/*           <h4>How to apply?</h4>*/
/*           <p>{{ entity.howtoapply }}</p>*/
/*         </div>*/
/*       </summary>*/
/*       <author><name>{{ entity.company }}</name></author>*/
/*     </entry>*/
/*   {% endfor %}*/
/* {% endfor %}*/
/* </feed>*/
